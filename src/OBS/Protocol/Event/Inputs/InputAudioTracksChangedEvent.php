<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The audio tracks of an input have changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputAudioTracksChangedEvent implements EventInterface
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
     * Object of audio tracks along with their associated enable states
     *
     * @var array
     */
    public array $inputAudioTracks;
    public function __construct(string $inputName, string $inputUuid, array $inputAudioTracks)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputAudioTracks = $inputAudioTracks;
    }
}
