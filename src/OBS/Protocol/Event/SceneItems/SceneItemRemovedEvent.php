<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene item has been removed.
 *
 * This event is not emitted when the scene the item is in is removed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 * @eventSubscription SceneItems
 */
final readonly class SceneItemRemovedEvent implements EventInterface
{
    /**
     * Name of the scene the item was removed from
     *
     * @var string
     */
    public string $sceneName;
    /**
     * UUID of the scene the item was removed from
     *
     * @var string
     */
    public string $sceneUuid;
    /**
     * Name of the underlying source (input/scene)
     *
     * @var string
     */
    public string $sourceName;
    /**
     * UUID of the underlying source (input/scene)
     *
     * @var string
     */
    public string $sourceUuid;
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;

    public function __construct(string $sceneName, string $sceneUuid, string $sourceName, string $sourceUuid, int $sceneItemId)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->sceneItemId = $sceneItemId;
    }
}
