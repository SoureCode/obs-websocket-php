<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Switches to a scene collection.
 * 
 * Note: This will block until the collection has finished changing.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class SetCurrentSceneCollectionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}