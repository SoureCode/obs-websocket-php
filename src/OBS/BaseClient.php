<?php

namespace SoureCode\OBS;

use Psr\Log\LoggerInterface;
use RuntimeException;
use SensitiveParameter;
use SoureCode\OBS\WebSocket\Embedding\Authentication;
use SoureCode\OBS\WebSocket\OBSMessage;
use SoureCode\OBS\WebSocket\Receive\EventMessage;
use SoureCode\OBS\WebSocket\Receive\HelloMessage;
use SoureCode\OBS\WebSocket\Receive\IdentifiedMessage;
use SoureCode\OBS\WebSocket\Receive\RequestResponseMessage;
use SoureCode\OBS\WebSocket\Send\IdentifyMessage;
use SoureCode\OBS\WebSocket\Send\ReidentifyMessage;
use SoureCode\OBS\Protocol\Enum\EventSubscription;
use SoureCode\OBS\Protocol\Enum\WebSocketCloseCode;
use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;
use SoureCode\OBS\Protocol\RequestInterface;
use SoureCode\OBS\WebSocket\Serializer\OBSMessageSerializer;
use WebSocket\Client as WebSocketClient;
use WebSocket\Connection;
use WebSocket\Exception\Exception;
use WebSocket\Message\Close;
use WebSocket\Message\Message;
use WebSocket\Message\Text;
use WebSocket\Middleware\MiddlewareInterface;

class BaseClient
{
    private WebSocketClient $client;
    private OBSMessageSerializer $serializer;

    public function __construct(
        private readonly string $url,
        ?OBSMessageSerializer   $obsMessageSerializer = null,
    ) {
        $this->serializer = $obsMessageSerializer ?? new OBSMessageSerializer();
        $this->client = new WebSocketClient($this->url);
    }

    public function send(string $message): void
    {
        $this->client->send(new Text($message));
    }

    public function hello(): OBSMessage
    {
        return $this->safeReceive(WebSocketOpCode::Hello, HelloMessage::class);
    }

    private function receive(): OBSMessage
    {
        $data = $this->client->receive();

        if ($data instanceof Close) {
            $closeStatus = $data->getCloseStatus();

            if ($closeStatus !== null) {

                $closeCode = WebSocketCloseCode::tryFrom($closeStatus);

                if ($closeCode === null) {
                    throw new RuntimeException(message: sprintf("Connection closed unexpectedly with %d", $closeStatus));
                }

                throw new RuntimeException(message: sprintf("Connection closed unexpectedly with %d - %s", $closeCode->value, $closeCode->name));
            }

            throw new RuntimeException('Connection closed unexpectedly');
        }

        if (!$data instanceof Text) {
            throw new RuntimeException('Unexpected message type');
        }

        return $this->serializer->deserialize($data->getContent());
    }

    public function identify(#[SensitiveParameter] $plainPassword, Authentication $authentication, ?EventSubscription $eventSubscriptions = EventSubscription::None): OBSMessage
    {
        $auth = base64_encode(hash('sha256', $plainPassword . $authentication->salt, true));
        $response = base64_encode(hash('sha256', $auth . $authentication->challenge, true));

        $message = new IdentifyMessage(1, $response, $eventSubscriptions);
        $obsMessage = new OBSMessage(WebSocketOpCode::Identify, $message);

        $this->send($this->serializer->serialize($obsMessage));

        return $this->identified();
    }

    public function identified(): OBSMessage
    {
        return $this->safeReceive(WebSocketOpCode::Identified, IdentifiedMessage::class);
    }

    public function reidentify(?EventSubscription $eventSubscriptions = EventSubscription::None): OBSMessage
    {
        $message = new ReidentifyMessage($eventSubscriptions);
        $obsMessage = new OBSMessage(WebSocketOpCode::Reidentify, $message);

        $this->send($this->serializer->serialize($obsMessage));

        return $this->identified();
    }

    public function request(RequestInterface $request): OBSMessage
    {
        $this->send($this->serializer->serializeRequest($request));

        return $this->safeReceive(WebSocketOpCode::RequestResponse, RequestResponseMessage::class);
    }

    private function safeReceive(WebSocketOpCode $code, string $className): OBSMessage
    {
        while (true) {
            $obsMessage = $this->receive();

            if ($obsMessage->op === $code && $obsMessage->d instanceof $className) {
                return $obsMessage;
            }
        }
    }

    public function authenticate(#[SensitiveParameter] $plainPassword, ?EventSubscription $eventSubscriptions = EventSubscription::None): void
    {
        if (!$this->client->isConnected()) {
            $this->client->connect();
        }

        $helloMessage = $this->hello();

        if ($helloMessage->d->authentication) {
            $this->identify($plainPassword, $helloMessage->d->authentication, $eventSubscriptions);
        }
    }

    /**
     * Receive events from the WebSocket connection until an event is received, everything else is ignored.
     */
    public function pollEvent(): EventMessage
    {
        while (true) {
            $obsMessage = $this->receive();

            if ($obsMessage->op === WebSocketOpCode::Event) {
                return $obsMessage->d;
            }
        }
    }

    public function addMiddleware(MiddlewareInterface $middleware): static
    {
        $this->client->addMiddleware($middleware);

        return $this;
    }

    public function setLogger(LoggerInterface $logger): static
    {
        $this->client->setLogger($logger);

        return $this;
    }

    /**
     * @param callable(OBSMessage, BaseClient, WebSocketClient, Connection, Message): void $callback
     * @return $this
     */
    public function on(callable $callback): static
    {
        $this->client->onText(function (WebSocketClient $client, Connection $connection, Message $message) use ($callback) {
            $obsMessage = $this->serializer->deserialize($message->getContent());

            $callback($obsMessage, $this, $client, $connection, $message);
        });

        return $this;
    }

    /**
     * @param callable(BaseClient, WebSocketClient, ?Connection, Exception): void $callback
     * @return $this
     */
    public function onError(callable $callback): static
    {
        $this->client->onError(function (WebSocketClient $client, Connection|null $connection, Exception $exception) use ($callback) {
            $callback($this, $client, $connection, $exception);
        });

        return $this;
    }

    /**
     * @param callable(BaseClient, WebSocketClient, Connection, Close): void $callback
     * @return $this
     */
    public function onClose(callable $callback): static
    {
        $this->client->onClose(function (WebSocketClient $client, Connection $connection, Close $message) use ($callback) {
            $callback($this, $client, $connection, $message);
        });

        return $this;
    }

    public function start(): void
    {
        $this->client->start();
    }
}
