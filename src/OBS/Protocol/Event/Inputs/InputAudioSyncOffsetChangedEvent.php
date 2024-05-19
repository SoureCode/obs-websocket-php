<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The sync offset of an input has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputAudioSyncOffsetChangedEvent implements EventInterface
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
     * New sync offset in milliseconds
     *
     * @var int
     */
    public int $inputAudioSyncOffset;
    public function __construct(string $inputName, string $inputUuid, int $inputAudioSyncOffset)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputAudioSyncOffset = $inputAudioSyncOffset;
    }
}
