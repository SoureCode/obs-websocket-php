<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Starts the replay buffer output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class StartReplayBufferRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
