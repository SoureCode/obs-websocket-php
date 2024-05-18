<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Searches a scene for a source, and returns its id.
 * 
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemIdRequest implements RequestInterface
{
    /**
     * Name of the source to find
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sourceName;
    /**
     * Name of the scene or group to search in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene or group to search in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneUuid;
    /**
     * Number of matches to skip during search. >= 0 means first forward. -1 means last (top) item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?int
     */
    public ?int $searchOffset;
    public function __construct(string $sourceName, ?string $sceneName = null, ?string $sceneUuid = null, ?int $searchOffset = null)
    {
        $this->sourceName = $sourceName;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->searchOffset = $searchOffset;
    }
}