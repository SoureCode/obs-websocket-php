<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets an array of all groups in OBS.
 *
 * Groups in OBS are actually scenes, but renamed and modified. In obs-websocket, we treat them as scenes where we can.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetGroupListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
