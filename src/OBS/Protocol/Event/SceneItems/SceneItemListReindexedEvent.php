<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A scene's item list has been reindexed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SceneItemListReindexedEvent implements EventInterface
{
    /**
     * Name of the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneName;
    /**
     * UUID of the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneUuid;
    /**
     * Array of scene item objects
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array<object>
     */
    public array $sceneItems;
    public function __construct(string $sceneName, string $sceneUuid, array $sceneItems)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItems = $sceneItems;
    }
}