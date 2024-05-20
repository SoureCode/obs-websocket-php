<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the audio sync offset of an input.
 *
 * Note: The audio sync offset can be negative too!
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class GetInputAudioSyncOffsetRequest implements RequestInterface
{
    /**
     * Name of the input to get the audio sync offset of
     */
    public ?string $inputName;
    /**
     * UUID of the input to get the audio sync offset of
     */
    public ?string $inputUuid;

    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
