<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Creates a new filter, adding it to the specified source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class CreateSourceFilterResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}