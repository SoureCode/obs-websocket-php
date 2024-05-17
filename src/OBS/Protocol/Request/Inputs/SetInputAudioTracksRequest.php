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
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $inputAudioTracks;
    /**
     * Name of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $inputName;
    /**
     * UUID of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $inputUuid;
    public function __construct(array $inputAudioTracks, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputAudioTracks = $inputAudioTracks;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}