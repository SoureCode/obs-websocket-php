<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class CreateSceneCollectionRequest implements RequestInterface
{
    /**
     * Name for the new scene collection
     */
    public string $sceneCollectionName;

    public function __construct(string $sceneCollectionName)
    {
        $this->sceneCollectionName = $sceneCollectionName;
    }
}
