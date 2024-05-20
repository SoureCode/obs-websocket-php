<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetInputAudioSyncOffsetResponse implements ResponseInterface
{
    /**
     * Audio sync offset in milliseconds
     */
    public int $inputAudioSyncOffset;

    public function __construct(int $inputAudioSyncOffset)
    {
        $this->inputAudioSyncOffset = $inputAudioSyncOffset;
    }
}
