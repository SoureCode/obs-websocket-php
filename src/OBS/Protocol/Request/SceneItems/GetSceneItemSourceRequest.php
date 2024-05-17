<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the source associated with a scene item.
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemSourceRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type int
     */
    public int $sceneItemId;
    /**
     * Name of the scene the item is in
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneUuid;
    public function __construct(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}