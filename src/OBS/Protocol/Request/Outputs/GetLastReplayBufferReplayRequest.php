<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the filename of the last replay buffer save file.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category outputs
 */
final readonly class GetLastReplayBufferReplayRequest implements RequestInterface
{
    public function __construct()
    {
    }
}