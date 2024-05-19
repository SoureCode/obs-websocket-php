<?php

namespace SoureCode\OBS\WebSocket\Receive;

use SoureCode\OBS\WebSocket\ReceiveMessageInterface;

final readonly class IdentifiedMessage implements ReceiveMessageInterface
{
    public function __construct(
        public int $negotiatedRpcVersion
    ) {
    }
}
