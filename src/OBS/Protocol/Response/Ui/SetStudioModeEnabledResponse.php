<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Enables or disables studio mode
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class SetStudioModeEnabledResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}