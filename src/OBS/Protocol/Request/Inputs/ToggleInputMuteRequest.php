<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Toggles the audio mute state of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class ToggleInputMuteRequest implements RequestInterface
{
    /**
     * Name of the input to toggle the mute state of
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to toggle the mute state of
     *
     * @var ?string
     */
    public ?string $inputUuid;
    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
