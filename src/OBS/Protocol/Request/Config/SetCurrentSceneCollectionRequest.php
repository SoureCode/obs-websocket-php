<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class SetCurrentSceneCollectionRequest implements RequestInterface
{
    /**
     * Name of the scene collection to switch to
     */
    public string $sceneCollectionName;

    public function __construct(string $sceneCollectionName)
    {
        $this->sceneCollectionName = $sceneCollectionName;
    }
}
