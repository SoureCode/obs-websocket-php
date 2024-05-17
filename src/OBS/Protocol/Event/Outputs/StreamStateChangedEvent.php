<?php

namespace SoureCode\OBS\Protocol\Event\Outputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The state of the stream output has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category outputs
 */
final readonly class StreamStateChangedEvent implements EventInterface
{
    /**
     * Whether the output is active
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $outputActive;
    /**
     * The specific state of the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $outputState;
    public function __construct(bool $outputActive, string $outputState)
    {
        $this->outputActive = $outputActive;
        $this->outputState = $outputState;
    }
}