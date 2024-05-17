<?php

namespace SoureCode\OBS\Message\Receive;

use SoureCode\OBS\Message\ReceiveMessageInterface;

final readonly class RequestBatchResponseMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $requestId,
        /**
         * @todo type of object(?)
         * @var array<array>
         */
        public array $results
    )
    {
    }
}
