<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The current scene collection has changed.
 * 
 * Note: If polling has been paused during `CurrentSceneCollectionChanging`, this is the que to restart polling.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class CurrentSceneCollectionChangedEvent implements EventInterface
{
    /**
     * Name of the new scene collection
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneCollectionName;
    public function __construct(string $sceneCollectionName)
    {
        $this->sceneCollectionName = $sceneCollectionName;
    }
}