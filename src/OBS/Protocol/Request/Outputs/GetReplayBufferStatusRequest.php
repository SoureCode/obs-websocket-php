<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the status of the replay buffer output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class GetReplayBufferStatusRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
