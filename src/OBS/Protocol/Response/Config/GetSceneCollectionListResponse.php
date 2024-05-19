<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all scene collections
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class GetSceneCollectionListResponse implements ResponseInterface
{
    /**
     * The name of the current scene collection
     *
     * @var string
     */
    public string $currentSceneCollectionName;
    /**
     * Array of all available scene collections
     *
     * @var array<string>
     */
    public array $sceneCollections;
    public function __construct(string $currentSceneCollectionName, array $sceneCollections)
    {
        $this->currentSceneCollectionName = $currentSceneCollectionName;
        $this->sceneCollections = $sceneCollections;
    }
}
