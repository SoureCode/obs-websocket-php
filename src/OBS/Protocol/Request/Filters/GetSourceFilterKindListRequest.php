<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets an array of all available source filter kinds.
 * 
 * Similar to `GetInputKindList`
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterKindListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}