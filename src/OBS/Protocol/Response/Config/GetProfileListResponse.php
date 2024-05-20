<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all profiles
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class GetProfileListResponse implements ResponseInterface
{
    /**
     * The name of the current profile
     */
    public string $currentProfileName;
    /**
     * Array of all available profiles
     *
     * @var array<string>
     */
    public array $profiles;
    /**
     * @param array<string> $profiles
     */
    public function __construct(string $currentProfileName, array $profiles)
    {
        $this->currentProfileName = $currentProfileName;
        $this->profiles = $profiles;
    }
}
