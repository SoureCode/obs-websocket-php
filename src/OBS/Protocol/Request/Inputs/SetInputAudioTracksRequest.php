<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the enable state of audio tracks of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputAudioTracksRequest implements RequestInterface
{
    /**
     * Track settings to apply
     *
     * @var array{1: bool, 2: bool, 3: bool, 4: bool, 5: bool, 6:bool}
     */
    public array $inputAudioTracks;
    /**
     * Name of the input
     */
    public ?string $inputName;
    /**
     * UUID of the input
     */
    public ?string $inputUuid;
    /**
     * @param array{1: bool, 2: bool, 3: bool, 4: bool, 5: bool, 6:bool} $inputAudioTracks
     */
    public function __construct(array $inputAudioTracks, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputAudioTracks = $inputAudioTracks;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
