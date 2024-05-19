<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the current stream service settings (stream destination).
 *
 * Note: Simple RTMP settings can be set with type `rtmp_custom` and the settings fields `server` and `key`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class SetStreamServiceSettingsResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
