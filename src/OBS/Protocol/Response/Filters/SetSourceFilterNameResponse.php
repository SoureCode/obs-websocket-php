<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the name of a source filter (rename).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class SetSourceFilterNameResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}