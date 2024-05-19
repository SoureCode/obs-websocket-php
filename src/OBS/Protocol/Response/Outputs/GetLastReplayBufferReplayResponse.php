<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the filename of the last replay buffer save file.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category outputs
 */
final readonly class GetLastReplayBufferReplayResponse implements ResponseInterface
{
    /**
     * File path
     *
     * @var string
     */
    public string $savedReplayPath;
    public function __construct(string $savedReplayPath)
    {
        $this->savedReplayPath = $savedReplayPath;
    }
}
