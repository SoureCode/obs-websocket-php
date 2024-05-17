<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Broadcasts a `CustomEvent` to all WebSocket clients. Receivers are clients which are identified and subscribed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 */
final readonly class BroadcastCustomEventResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}