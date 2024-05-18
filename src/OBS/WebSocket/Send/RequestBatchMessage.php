<?php

namespace SoureCode\OBS\WebSocket\Send;

/*
 * {
  "requests": array<object>
}
 */

use SoureCode\OBS\WebSocket\Embedding\BatchRequest;
use SoureCode\OBS\WebSocket\SendMessageInterface;
use SoureCode\OBS\Protocol\Enum\RequestBatchExecutionType;

class RequestBatchMessage implements SendMessageInterface
{
    public function __construct(
        public string $requestId,
        /**
         * @var array<BatchRequest>
         */
        public array $requests,
        public bool $haltOnFailure = false,
        public ?RequestBatchExecutionType $executionType = RequestBatchExecutionType::SerialRealtime,
    )
    {
    }
}
