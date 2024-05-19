<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class SetSceneItemLockedRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;
    /**
     * New lock state of the scene item
     *
     * @var bool
     */
    public bool $sceneItemLocked;
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
    public function __construct(int $sceneItemId, bool $sceneItemLocked, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemLocked = $sceneItemLocked;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
