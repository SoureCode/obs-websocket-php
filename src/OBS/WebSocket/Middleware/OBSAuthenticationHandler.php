<?php

namespace SoureCode\OBS\WebSocket\Middleware;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use SensitiveParameter;
use SoureCode\OBS\Protocol\Enum\EventSubscription;
use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;
use SoureCode\OBS\WebSocket\OBSMessage;
use SoureCode\OBS\WebSocket\Receive\HelloMessage;
use SoureCode\OBS\WebSocket\Send\IdentifyMessage;
use SoureCode\OBS\WebSocket\Serializer\OBSMessageSerializer;
use WebSocket\Connection;
use WebSocket\Message\Message;
use WebSocket\Message\Text;
use WebSocket\Middleware\ProcessIncomingInterface;
use WebSocket\Middleware\ProcessStack;
use WebSocket\Trait\StringableTrait;

class OBSAuthenticationHandler implements ProcessIncomingInterface, LoggerAwareInterface
{
    use StringableTrait;
    use LoggerAwareTrait;

    private OBSMessageSerializer $serializer;

    public function __construct(
        #[SensitiveParameter]
        private readonly string             $plainPassword,
        private readonly ?EventSubscription $eventSubscriptions = EventSubscription::None,
        ?OBSMessageSerializer               $serializer = null,
    )
    {
        $this->serializer = $serializer ?? new OBSMessageSerializer();
    }

    public function processIncoming(ProcessStack $stack, Connection $connection): Message
    {
        $message = $stack->handleIncoming();

        if (!$message instanceof Text) {
            return $message;
        }

        $obsMessage = $this->serializer->deserialize($message->getContent());

        if ($obsMessage->op === WebSocketOpCode::Identified) {
            $this->logger->debug("[obs-authentication-handler] Received 'identified'");

            return $message;
        }

        if ($obsMessage->op === WebSocketOpCode::Hello) {
            $this->logger->debug("[obs-authentication-handler] Received 'hello'");

            $data = $obsMessage->d;

            if ($connection->isWritable()) {
                if (($data instanceof HelloMessage) && $data->authentication) {
                    $this->logger->debug("[obs-authentication-handler] Requires authentication");

                    $auth = base64_encode(hash('sha256', $this->plainPassword . $data->authentication->salt, true));
                    $response = base64_encode(hash('sha256', $auth . $data->authentication->challenge, true));

                    $obsMessage = new OBSMessage(
                        WebSocketOpCode::Identify,
                        new IdentifyMessage(1, $response, $this->eventSubscriptions)
                    );

                    $this->logger->debug("[obs-authentication-handler] Sending 'identify'");
                    $connection->send(new Text($this->serializer->serialize($obsMessage)));
                }
            } else {
                $this->logger->debug("[obs-authentication-handler] Connection is not writable, cannot send 'identify'");
            }
        }

        return $message;
    }
}
