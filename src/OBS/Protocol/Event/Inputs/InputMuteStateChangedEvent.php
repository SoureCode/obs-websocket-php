<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * An input's mute state has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class InputMuteStateChangedEvent implements EventInterface
{
    /**
     * Name of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputName;
    /**
     * UUID of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputUuid;
    /**
     * Whether the input is muted
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $inputMuted;
    public function __construct(string $inputName, string $inputUuid, bool $inputMuted)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputMuted = $inputMuted;
    }
}