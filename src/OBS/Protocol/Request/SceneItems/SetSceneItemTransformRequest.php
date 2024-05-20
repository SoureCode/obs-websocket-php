<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the transform and crop info of a scene item.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SetSceneItemTransformRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;
    /**
     * Object containing scene item transform info to update
     *
     * @var array
     */
    public array $sceneItemTransform;
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
    /**
     * @param array $sceneItemTransform
     */
    public function __construct(int $sceneItemId, array $sceneItemTransform, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemTransform = $sceneItemTransform;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
