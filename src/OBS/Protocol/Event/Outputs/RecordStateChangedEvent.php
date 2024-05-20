<?php

namespace SoureCode\OBS\Protocol\Event\Outputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The state of the record output has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category outputs
 * @eventSubscription Outputs
 */
final readonly class RecordStateChangedEvent implements EventInterface
{
    /**
     * Whether the output is active
     *
     * @var bool
     */
    public bool $outputActive;
    /**
     * The specific state of the output
     *
     * @var string
     */
    public string $outputState;
    /**
     * File name for the saved recording, if record stopped. `null` otherwise
     *
     * @var string
     */
    public string $outputPath;

    public function __construct(bool $outputActive, string $outputState, string $outputPath)
    {
        $this->outputActive = $outputActive;
        $this->outputState = $outputState;
        $this->outputPath = $outputPath;
    }
}
