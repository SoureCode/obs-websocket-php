<?php

namespace SoureCode\OBS\WebSocket;

use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;

/**
 * @template T
 */
final readonly class OBSMessage
{
    /**
     * @param T $d
     */
    public function __construct(
        public WebSocketOpCode $op,
        /**
         * @var T $d
         */
        public mixed           $d
    )
    {
    }
}
