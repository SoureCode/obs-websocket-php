<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the enable state of all audio tracks of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputAudioTracksResponse implements ResponseInterface
{
    /**
     * Object of audio tracks and associated enable states
     *
     * @var array
     */
    public array $inputAudioTracks;
    public function __construct(array $inputAudioTracks)
    {
        $this->inputAudioTracks = $inputAudioTracks;
    }
}
