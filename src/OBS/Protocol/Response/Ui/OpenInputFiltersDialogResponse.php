<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Opens the filters dialog of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class OpenInputFiltersDialogResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}