<?php

namespace SoureCode\OBS\WebSocket\Receive;

use SoureCode\OBS\WebSocket\ReceiveMessageInterface;

final readonly class RequestBatchResponseMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $requestId,
        /**
         * @todo type of object(?)
         */
        public array $results
    ) {
    }
}
