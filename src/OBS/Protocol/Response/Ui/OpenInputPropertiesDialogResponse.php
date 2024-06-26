<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Opens the properties dialog of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class OpenInputPropertiesDialogResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
