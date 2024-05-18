<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the audio mute state of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputMuteRequest implements RequestInterface
{
    /**
     * Whether to mute the input or not
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $inputMuted;
    /**
     * Name of the input to set the mute state of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the mute state of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputUuid;
    public function __construct(bool $inputMuted, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputMuted = $inputMuted;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}