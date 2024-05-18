<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the audio sync offset of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class SetInputAudioSyncOffsetRequest implements RequestInterface
{
    /**
     * New audio sync offset in milliseconds
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $inputAudioSyncOffset;
    /**
     * Name of the input to set the audio sync offset of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the audio sync offset of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputUuid;
    public function __construct(int $inputAudioSyncOffset, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputAudioSyncOffset = $inputAudioSyncOffset;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}