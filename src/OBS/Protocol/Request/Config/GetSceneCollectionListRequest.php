<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets an array of all scene collections
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class GetSceneCollectionListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
