<?php

namespace SoureCode\OBS\WebSocket\Serializer;

use SoureCode\OBS\WebSocket\OBSMessage;
use SoureCode\OBS\WebSocket\Receive\EventMessage;
use SoureCode\OBS\WebSocket\Receive\HelloMessage;
use SoureCode\OBS\WebSocket\Receive\IdentifiedMessage;
use SoureCode\OBS\WebSocket\Receive\RequestBatchResponseMessage;
use SoureCode\OBS\WebSocket\Receive\RequestResponseMessage;
use SoureCode\OBS\WebSocket\Send\IdentifyMessage;
use SoureCode\OBS\WebSocket\Send\ReidentifyMessage;
use SoureCode\OBS\WebSocket\Send\RequestBatchMessage;
use SoureCode\OBS\WebSocket\Send\RequestMessage;
use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;
use SoureCode\OBS\Protocol\RequestInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Uid\Ulid;

class OBSMessageSerializer
{
    private SerializerInterface $serializer;

    public function __construct(
        ?SerializerInterface $serializer = null,
    ) {
        $discriminator = new ProtocolClassDiscriminatorResolver();

        $this->serializer = $serializer ?? new Serializer([
            new BackedEnumNormalizer(),
            new ObjectNormalizer(classDiscriminatorResolver: $discriminator),
        ], [
            new JsonEncoder(),
        ]);
    }

    public function serializeRequest(RequestInterface $request): string
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

        $webSocketMessage = new OBSMessage(WebSocketOpCode::Request, $message);

        return $this->serializer->serialize($webSocketMessage, 'json');
    }

    public function serialize(OBSMessage $message): string
    {
        return $this->serializer->serialize($message, 'json');
    }

    public function deserialize(string $data): OBSMessage
    {
        $webSocketMessage = $this->serializer->deserialize($data, OBSMessage::class, 'json');

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
            $webSocketData['responseData']['serializerType'] = $webSocketData['requestType'];
        } elseif ($webSocketMessage->op === WebSocketOpCode::Event) {
            $webSocketData['eventData']['serializerType'] = $webSocketData['eventType'];
        }

        $message = $this->serializer->denormalize($webSocketData, $messageType, 'json');

        return new OBSMessage($webSocketMessage->op, $message);
    }
}
