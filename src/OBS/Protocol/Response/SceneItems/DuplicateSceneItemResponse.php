<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class DuplicateSceneItemResponse implements ResponseInterface
{
    /**
     * Numeric ID of the duplicated scene item
     */
    public int $sceneItemId;

    public function __construct(int $sceneItemId)
    {
        $this->sceneItemId = $sceneItemId;
    }
}
