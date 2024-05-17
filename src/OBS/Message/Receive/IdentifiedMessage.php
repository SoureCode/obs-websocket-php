<?php

namespace SoureCode\OBS\Message\Receive;

use SoureCode\OBS\Message\ReceiveMessageInterface;

final readonly class IdentifiedMessage implements ReceiveMessageInterface
{
    public function __construct(
        public int $negotiatedRpcVersion
    )
    {
    }
}
