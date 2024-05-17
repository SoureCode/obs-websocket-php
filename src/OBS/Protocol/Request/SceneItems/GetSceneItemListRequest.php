<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets a list of all scene items in a scene.
 * 
 * Scenes only
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemListRequest implements RequestInterface
{
    /**
     * Name of the scene to get the items of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to get the items of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneUuid;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}