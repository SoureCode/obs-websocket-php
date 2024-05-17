<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Switches to a profile.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class SetCurrentProfileRequest implements RequestInterface
{
    /**
     * Name of the profile to switch to
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