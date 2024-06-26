<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene item has been created.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 * @eventSubscription SceneItems
 */
final readonly class SceneItemCreatedEvent implements EventInterface
{
    /**
     * Name of the scene the item was added to
     *
     * @var string
     */
    public string $sceneName;
    /**
     * UUID of the scene the item was added to
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
    /**
     * Index position of the item
     *
     * @var int
     */
    public int $sceneItemIndex;

    public function __construct(string $sceneName, string $sceneUuid, string $sourceName, string $sourceUuid, int $sceneItemId, int $sceneItemIndex)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemIndex = $sceneItemIndex;
    }
}
