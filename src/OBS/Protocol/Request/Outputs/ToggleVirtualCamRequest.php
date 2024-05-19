<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Toggles the state of the virtualcam output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class ToggleVirtualCamRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
