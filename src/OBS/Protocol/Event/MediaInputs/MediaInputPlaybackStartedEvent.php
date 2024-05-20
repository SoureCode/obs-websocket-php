<?php

namespace SoureCode\OBS\Protocol\Event\MediaInputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A media input has started playing.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 * @eventSubscription MediaInputs
 */
final readonly class MediaInputPlaybackStartedEvent implements EventInterface
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

    public function __construct(string $inputName, string $inputUuid)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
