<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the index position of a scene item in a scene.
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SetSceneItemIndexRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     */
    public int $sceneItemId;
    /**
     * New index position of the scene item
     */
    public int $sceneItemIndex;
    /**
     * Name of the scene the item is in
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     */
    public ?string $sceneUuid;

    public function __construct(int $sceneItemId, int $sceneItemIndex, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemIndex = $sceneItemIndex;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
