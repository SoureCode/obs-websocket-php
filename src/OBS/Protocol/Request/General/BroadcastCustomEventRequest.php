<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Broadcasts a `CustomEvent` to all WebSocket clients. Receivers are clients which are identified and subscribed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 */
final readonly class BroadcastCustomEventRequest implements RequestInterface
{
    /**
     * Data payload to emit to all receivers
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