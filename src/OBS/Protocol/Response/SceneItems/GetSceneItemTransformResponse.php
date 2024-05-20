<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the transform and crop info of a scene item.
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemTransformResponse implements ResponseInterface
{
    /**
     * Object containing scene item transform info
     *
     * @var array
     */
    public array $sceneItemTransform;
    /**
     * @param array $sceneItemTransform
     */
    public function __construct(array $sceneItemTransform)
    {
        $this->sceneItemTransform = $sceneItemTransform;
    }
}
