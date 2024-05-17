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
 */
final readonly class CustomEvent implements EventInterface
{
    /**
     * Custom event data
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $eventData;
    public function __construct(array $eventData)
    {
        $this->eventData = $eventData;
    }
}