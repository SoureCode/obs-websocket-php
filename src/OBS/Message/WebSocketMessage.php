<?php

namespace SoureCode\OBS\Message;

use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;

/**
 * @template T
 */
final readonly class WebSocketMessage
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
