<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Duplicates a scene item, copying all transform and crop info.
 * 
 * Scenes only
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class DuplicateSceneItemRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $sceneItemId;
    /**
     * Name of the scene the item is in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneUuid;
    /**
     * Name of the scene to create the duplicated item in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $destinationSceneName;
    /**
     * UUID of the scene to create the duplicated item in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $destinationSceneUuid;
    public function __construct(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null, ?string $destinationSceneName = null, ?string $destinationSceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->destinationSceneName = $destinationSceneName;
        $this->destinationSceneUuid = $destinationSceneUuid;
    }
}