<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets whether studio is enabled.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class GetStudioModeEnabledRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
