<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets a list of connected monitors and information about them.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category ui
 */
final readonly class GetMonitorListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
