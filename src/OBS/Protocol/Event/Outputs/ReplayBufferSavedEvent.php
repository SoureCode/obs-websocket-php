<?php

namespace SoureCode\OBS\Protocol\Event\Outputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The replay buffer has been saved.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category outputs
 */
final readonly class ReplayBufferSavedEvent implements EventInterface
{
    /**
     * Path of the saved replay file
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $savedReplayPath;
    public function __construct(string $savedReplayPath)
    {
        $this->savedReplayPath = $savedReplayPath;
    }
}