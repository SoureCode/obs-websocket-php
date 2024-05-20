<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetSceneItemIndexResponse implements ResponseInterface
{
    /**
     * Index position of the scene item
     *
     * @var int
     */
    public int $sceneItemIndex;

    public function __construct(int $sceneItemIndex)
    {
        $this->sceneItemIndex = $sceneItemIndex;
    }
}
