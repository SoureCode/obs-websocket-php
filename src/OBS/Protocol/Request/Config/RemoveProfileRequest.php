<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Removes a profile. If the current profile is chosen, it will change to a different profile first.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class RemoveProfileRequest implements RequestInterface
{
    /**
     * Name of the profile to remove
     *
     * @var string
     */
    public string $profileName;

    public function __construct(string $profileName)
    {
        $this->profileName = $profileName;
    }
}
