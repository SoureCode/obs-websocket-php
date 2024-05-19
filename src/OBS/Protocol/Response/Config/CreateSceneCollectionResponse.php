<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Creates a new scene collection, switching to it in the process.
 *
 * Note: This will block until the collection has finished changing.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class CreateSceneCollectionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
