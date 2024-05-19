<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Removes a filter from a source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class RemoveSourceFilterResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
