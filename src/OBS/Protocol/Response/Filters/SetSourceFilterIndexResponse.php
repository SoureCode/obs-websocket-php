<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the index position of a filter on a source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SetSourceFilterIndexResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
