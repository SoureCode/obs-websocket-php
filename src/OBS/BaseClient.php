<?php

namespace SoureCode\OBS;

use SoureCode\OBS\Message\Embedding\Authentication;
use SoureCode\OBS\Message\Receive\EventMessage;
use SoureCode\OBS\Message\Receive\HelloMessage;
use SoureCode\OBS\Message\Receive\IdentifiedMessage;
use SoureCode\OBS\Message\Receive\RequestBatchResponseMessage;
use SoureCode\OBS\Message\Receive\RequestResponseMessage;
use SoureCode\OBS\Message\Send\IdentifyMessage;
use SoureCode\OBS\Message\Send\ReidentifyMessage;
use SoureCode\OBS\Message\Send\RequestBatchMessage;
use SoureCode\OBS\Message\Send\RequestMessage;
use SoureCode\OBS\Message\WebSocketMessage;
use SoureCode\OBS\Protocol\Enum\EventSubscription;
use SoureCode\OBS\Protocol\Enum\WebSocketCloseCode;
use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;
use SoureCode\OBS\Protocol\ResponseInterface;
use SensitiveParameter;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Uid\Ulid;
use WebSocket\Client as WebSocketClient;

class BaseClient
{
    private WebSocketClient $client;
    private Serializer $serializer;
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;

        $this->client = new WebSocketClient($this->url);

        $discriminator = new ProtocolClassDiscriminatorResolver();

        $this->serializer = new Serializer([
            new BackedEnumNormalizer(),
            new ObjectNormalizer(classDiscriminatorResolver: $discriminator),
        ], [
            new JsonEncoder(),
        ]);
    }

    public function send(string $message)
    {
        $this->client->send($message);
    }

    /**
     * @return WebSocketMessage<HelloMessage>
     */
    public function hello(): WebSocketMessage
    {
        return $this->safeReceive(WebSocketOpCode::Hello, HelloMessage::class);
    }

    private function receive(): WebSocketMessage
    {
        $this->ensureConnected();

        $data = $this->client->receive();

        if ($data === null) {
            $this->ensureConnected();

            throw new \RuntimeException('Unexpected null');
        }

        return $this->decode($data);
    }

    private function decode(mixed $data): WebSocketMessage
    {
        $webSocketMessage = $this->serializer->deserialize($data, WebSocketMessage::class, 'json');

        $messageType = match ($webSocketMessage->op) {
            WebSocketOpCode::Hello => HelloMessage::class,
            WebSocketOpCode::Identify => IdentifyMessage::class,
            WebSocketOpCode::Identified => IdentifiedMessage::class,
            WebSocketOpCode::Reidentify => ReidentifyMessage::class,
            WebSocketOpCode::Event => EventMessage::class,
            WebSocketOpCode::Request => RequestMessage::class,
            WebSocketOpCode::RequestResponse => RequestResponseMessage::class,
            WebSocketOpCode::RequestBatch => RequestBatchMessage::class,
            WebSocketOpCode::RequestBatchResponse => RequestBatchResponseMessage::class,
            default => throw new \Exception('Unknown message type')
        };

        $webSocketData = $webSocketMessage->d;

        if ($webSocketMessage->op === WebSocketOpCode::RequestResponse) {
            $webSocketData['responseData'][ProtocolClassDiscriminatorResolver::TYPE_KEY] = $webSocketData['requestType'];
        } else if ($webSocketMessage->op === WebSocketOpCode::Event) {
            $webSocketData['eventData'][ProtocolClassDiscriminatorResolver::TYPE_KEY] = $webSocketData['eventType'];
        }

        $message = $this->serializer->denormalize($webSocketData, $messageType, 'json');

        return new WebSocketMessage($webSocketMessage->op, $message);
    }

    /**
     * @return WebSocketMessage<IdentifiedMessage>
     */
    public function identify(#[SensitiveParameter] $plainPassword, Authentication $authentication, ?EventSubscription $eventSubscriptions = EventSubscription::None): WebSocketMessage
    {
        $this->ensureConnected();

        $auth = base64_encode(hash('sha256', $plainPassword . $authentication->salt, true));
        $response = base64_encode(hash('sha256', $auth . $authentication->challenge, true));

        $message = new IdentifyMessage(1, $response, $eventSubscriptions);
        $webSocketMessage = new WebSocketMessage(WebSocketOpCode::Identify, $message);

        $this->send($this->serializer->serialize($webSocketMessage, 'json'));

        return $this->identified();
    }

    /**
     * @return WebSocketMessage<IdentifiedMessage>
     */
    public function identified(): WebSocketMessage
    {
        return $this->safeReceive(WebSocketOpCode::Identified, IdentifiedMessage::class);
    }

    public function reidentify(?EventSubscription $eventSubscriptions = EventSubscription::None): WebSocketMessage
    {
        $message = new ReidentifyMessage($eventSubscriptions);
        $webSocketMessage = new WebSocketMessage(WebSocketOpCode::Reidentify, $message);

        $this->send($this->serializer->serialize($webSocketMessage, 'json'));

        return $this->identified();
    }

    public function encode(mixed $request): string
    {
        $classType = $request::class;
        $className = substr($classType, strrpos($classType, '\\') + 1);
        $requestType = substr($className, 0, -7);
        $requestId = Ulid::generate();

        $message = new RequestMessage(
            $requestType,
            $requestId,
            $request,
        );

        $webSocketMessage = new WebSocketMessage(WebSocketOpCode::Request, $message);

        return $this->serializer->serialize($webSocketMessage, 'json');
    }

    /**
     * @template T of ResponseInterface
     * @return WebSocketMessage<RequestResponseMessage<T>>
     */
    public function request(mixed $request): WebSocketMessage
    {
        $this->ensureConnected();

        $this->send($this->encode($request));

        return $this->safeReceive(WebSocketOpCode::RequestResponse, RequestResponseMessage::class);
    }

    private function safeReceive(WebSocketOpCode $code, string $className): WebSocketMessage
    {
        while (true) {
            $webSocketMessage = $this->receive();

            if ($webSocketMessage->op === $code && $webSocketMessage->d instanceof $className) {
                return $webSocketMessage;
            }

            if ($webSocketMessage->op === WebSocketOpCode::Event) {
                $this->dispatchEvent($webSocketMessage);
            } else {
                throw new \RuntimeException('Unexpected message of type ' . $webSocketMessage->op->name);
            }
        }
    }

    private function ensureConnected(): void
    {
        if (!$this->client->isConnected()) {
            $closeStatus = $this->client->getCloseStatus();

            if ($closeStatus === null) {
                return;
            }

            $closeCode = WebSocketCloseCode::tryFrom($closeStatus);

            if ($closeCode === null) {
                throw new \RuntimeException(message: sprintf("Connection closed unexpectedly with %d", $closeStatus));
            }

            throw new \RuntimeException(message: sprintf("Connection closed unexpectedly with %d - %s", $closeCode->value, $closeCode->name));
        }
    }

    private function dispatchEvent(WebSocketMessage $webSocketMessage)
    {
        var_dump('event', $webSocketMessage->d::class, $webSocketMessage);
    }

    public function authenticate(#[SensitiveParameter] $plainPassword, ?EventSubscription $eventSubscriptions = EventSubscription::None): void
    {
        if (!$this->client->isConnected()) {
            $this->client = new WebSocketClient($this->url);
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
            $this->ensureConnected();

            $webSocketMessage = $this->receive();

            if ($webSocketMessage->op === WebSocketOpCode::Event) {
                return $webSocketMessage->d;
            }
        }
    }
}
