<?php

namespace SoureCode\OBS\WebSocket\Embedding;

use SoureCode\OBS\Protocol\RequestInterface;

final readonly class BatchRequest
{
    public function __construct(
        public string $requestType,
        public ?string $requestId,
        public ?RequestInterface $requestData = null,
    ) {
    }
}
