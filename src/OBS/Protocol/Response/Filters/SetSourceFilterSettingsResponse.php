<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the settings of a source filter.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SetSourceFilterSettingsResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}