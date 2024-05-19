<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the current video settings.
 *
 * Note: Fields must be specified in pairs. For example, you cannot set only `baseWidth` without needing to specify `baseHeight`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetVideoSettingsResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
