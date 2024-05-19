<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the current stream service settings (stream destination).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class GetStreamServiceSettingsRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
