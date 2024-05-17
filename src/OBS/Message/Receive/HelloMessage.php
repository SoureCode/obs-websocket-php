<?php

namespace SoureCode\OBS\Message\Receive;

use SoureCode\OBS\Message\Embedding\Authentication;
use SoureCode\OBS\Message\ReceiveMessageInterface;

final readonly class HelloMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $obsWebSocketVersion,
        public int $rpcVersion,
        public ?Authentication $authentication
    )
    {
    }
}
