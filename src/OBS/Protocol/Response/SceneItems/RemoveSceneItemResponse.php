<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Removes a scene item from a scene.
 *
 * Scenes only
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class RemoveSceneItemResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
