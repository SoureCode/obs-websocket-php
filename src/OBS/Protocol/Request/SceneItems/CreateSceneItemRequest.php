<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Creates a new scene item using a source.
 * 
 * Scenes only
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class CreateSceneItemRequest implements RequestInterface
{
    /**
     * Name of the scene to create the new item in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to create the new item in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneUuid;
    /**
     * Name of the source to add to the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceName;
    /**
     * UUID of the source to add to the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceUuid;
    /**
     * Enable state to apply to the scene item on creation
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public ?bool $sceneItemEnabled;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null, ?string $sourceName = null, ?string $sourceUuid = null, ?bool $sceneItemEnabled = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->sceneItemEnabled = $sceneItemEnabled;
    }
}