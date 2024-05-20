<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The profile list has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 * @eventSubscription Config
 */
final readonly class ProfileListChangedEvent implements EventInterface
{
    /**
     * Updated list of profiles
     *
     * @var array<string>
     */
    public array $profiles;
    /**
     * @param array<string> $profiles
     */
    public function __construct(array $profiles)
    {
        $this->profiles = $profiles;
    }
}
