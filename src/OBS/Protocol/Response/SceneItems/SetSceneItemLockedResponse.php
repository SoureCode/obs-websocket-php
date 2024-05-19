<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the lock state of a scene item.
 *
 * Scenes and Group
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SetSceneItemLockedResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
