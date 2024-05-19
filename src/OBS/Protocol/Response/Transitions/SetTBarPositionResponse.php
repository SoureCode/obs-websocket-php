<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the position of the TBar.
 *
 * **Very important note**: This will be deprecated and replaced in a future version of obs-websocket.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class SetTBarPositionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
