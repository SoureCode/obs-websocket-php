<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Creates a new profile, switching to it in the process
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class CreateProfileRequest implements RequestInterface
{
    /**
     * Name for the new profile
     *
     * @var string
     */
    public string $profileName;
    public function __construct(string $profileName)
    {
        $this->profileName = $profileName;
    }
}
