<?php

namespace SoureCode\OBS\Protocol\Event\General;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * OBS has begun the shutdown process.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 */
final readonly class ExitStartedEvent implements EventInterface
{
    public function __construct()
    {
    }
}