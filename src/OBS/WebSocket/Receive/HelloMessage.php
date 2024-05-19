<?php

namespace SoureCode\OBS\WebSocket\Receive;

use SoureCode\OBS\WebSocket\Embedding\Authentication;
use SoureCode\OBS\WebSocket\ReceiveMessageInterface;

final readonly class HelloMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $obsWebSocketVersion,
        public int $rpcVersion,
        public ?Authentication $authentication
    ) {
    }
}
