<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets statistics about OBS, obs-websocket, and the current session.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category general
 */
final readonly class GetStatsRequest implements RequestInterface
{
    public function __construct()
    {
    }
}