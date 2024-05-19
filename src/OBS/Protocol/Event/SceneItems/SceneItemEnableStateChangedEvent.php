<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene item's enable state has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 * @eventSubscription SceneItems
 */
final readonly class SceneItemEnableStateChangedEvent implements EventInterface
{
    /**
     * Name of the scene the item is in
     *
     * @var string
     */
    public string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @var string
     */
    public string $sceneUuid;
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;
    /**
     * Whether the scene item is enabled (visible)
     *
     * @var bool
     */
    public bool $sceneItemEnabled;
    public function __construct(string $sceneName, string $sceneUuid, int $sceneItemId, bool $sceneItemEnabled)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemEnabled = $sceneItemEnabled;
    }
}
