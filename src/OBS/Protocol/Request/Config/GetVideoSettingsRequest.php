<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the current video settings.
 *
 * Note: To get the true FPS value, divide the FPS numerator by the FPS denominator. Example: `60000/1001`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetVideoSettingsRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
