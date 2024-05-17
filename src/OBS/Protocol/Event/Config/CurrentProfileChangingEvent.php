<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The current profile has begun changing.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class CurrentProfileChangingEvent implements EventInterface
{
    /**
     * Name of the current profile
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $profileName;
    public function __construct(string $profileName)
    {
        $this->profileName = $profileName;
    }
}