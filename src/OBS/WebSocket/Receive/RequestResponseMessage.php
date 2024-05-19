<?php

namespace SoureCode\OBS\WebSocket\Receive;

use SoureCode\OBS\WebSocket\Embedding\ResponseStatus;
use SoureCode\OBS\WebSocket\ReceiveMessageInterface;
use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * @template T of ResponseInterface
 */
final readonly class RequestResponseMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string             $requestType,
        public string             $requestId,
        public ResponseStatus     $requestStatus,
        /**
         * @phpstan-var T|null
         */
        public ?ResponseInterface $responseData = null,
    ) {
    }
}
