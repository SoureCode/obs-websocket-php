<?php

namespace SoureCode\OBS\WebSocket;

use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;

final readonly class OBSMessage
{
    public function __construct(
        public WebSocketOpCode $op,
        public mixed           $d
    ) {
    }
}
