<?php

namespace SoureCode\OBS\WebSocket\Send;

use SoureCode\OBS\WebSocket\SendMessageInterface;
use SoureCode\OBS\Protocol\RequestInterface;

final readonly class RequestMessage implements SendMessageInterface
{
    public function __construct(
        public string $requestType,
        public string $requestId,
        public ?RequestInterface $requestData = null,
    ) {
    }
}
