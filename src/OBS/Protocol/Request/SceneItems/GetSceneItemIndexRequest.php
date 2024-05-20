<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the index position of a scene item in a scene.
 *
 * An index of 0 is at the bottom of the source list in the UI.
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemIndexRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;
    /**
     * Name of the scene the item is in
     *
     * @var ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @var ?string
     */
    public ?string $sceneUuid;

    public function __construct(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
