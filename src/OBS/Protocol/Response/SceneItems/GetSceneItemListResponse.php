<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;
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
final readonly class GetSceneItemListResponse implements ResponseInterface
{
    /**
     * Array of scene items in the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array<object>
     */
    public array $sceneItems;
    public function __construct(array $sceneItems)
    {
        $this->sceneItems = $sceneItems;
    }
}