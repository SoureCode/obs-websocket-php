<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Toggles the state of the replay buffer output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class ToggleReplayBufferResponse implements ResponseInterface
{
    /**
     * Whether the output is active
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $outputActive;
    public function __construct(bool $outputActive)
    {
        $this->outputActive = $outputActive;
    }
}