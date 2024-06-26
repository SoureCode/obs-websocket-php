<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The current profile has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 * @eventSubscription Config
 */
final readonly class CurrentProfileChangedEvent implements EventInterface
{
    /**
     * Name of the new profile
     *
     * @var string
     */
    public string $profileName;

    public function __construct(string $profileName)
    {
        $this->profileName = $profileName;
    }
}
