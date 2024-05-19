<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Starts the replay buffer output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class StartReplayBufferResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
