<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class CreateSceneItemResponse implements ResponseInterface
{
    /**
     * Numeric ID of the scene item
     */
    public int $sceneItemId;

    public function __construct(int $sceneItemId)
    {
        $this->sceneItemId = $sceneItemId;
    }
}
