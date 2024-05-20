<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the lock state of a scene item.
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemLockedResponse implements ResponseInterface
{
    /**
     * Whether the scene item is locked. `true` for locked, `false` for unlocked
     */
    public bool $sceneItemLocked;

    public function __construct(bool $sceneItemLocked)
    {
        $this->sceneItemLocked = $sceneItemLocked;
    }
}
