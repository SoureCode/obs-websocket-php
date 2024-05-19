<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Removes a profile. If the current profile is chosen, it will change to a different profile first.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class RemoveProfileResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
