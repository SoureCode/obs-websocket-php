<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * An input's active state has changed.
 *
 * When an input is active, it means it's being shown by the program feed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 * @eventSubscription InputActiveStateChanged
 */
final readonly class InputActiveStateChangedEvent implements EventInterface
{
    /**
     * Name of the input
     *
     * @var string
     */
    public string $inputName;
    /**
     * UUID of the input
     *
     * @var string
     */
    public string $inputUuid;
    /**
     * Whether the input is active
     *
     * @var bool
     */
    public bool $videoActive;

    public function __construct(string $inputName, string $inputUuid, bool $videoActive)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->videoActive = $videoActive;
    }
}
