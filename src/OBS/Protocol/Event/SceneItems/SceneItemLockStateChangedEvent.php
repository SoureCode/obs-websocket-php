<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A scene item's lock state has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SceneItemLockStateChangedEvent implements EventInterface
{
    /**
     * Name of the scene the item is in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneUuid;
    /**
     * Numeric ID of the scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $sceneItemId;
    /**
     * Whether the scene item is locked
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $sceneItemLocked;
    public function __construct(string $sceneName, string $sceneUuid, int $sceneItemId, bool $sceneItemLocked)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemLocked = $sceneItemLocked;
    }
}