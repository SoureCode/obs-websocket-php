<?php

namespace SoureCode\OBS\Protocol\Event\General;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * Custom event emitted by `BroadcastCustomEvent`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 * @eventSubscription General
 */
final readonly class CustomEventEvent implements EventInterface
{
    /**
     * Custom event data
     *
     * @var array
     */
    public array $eventData;
    /**
     * @param array $eventData
     */
    public function __construct(array $eventData)
    {
        $this->eventData = $eventData;
    }
}
