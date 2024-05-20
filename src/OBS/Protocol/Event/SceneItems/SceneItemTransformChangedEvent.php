<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The transform/crop of a scene item has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category scene items
 * @eventSubscription SceneItemTransformChanged
 */
final readonly class SceneItemTransformChangedEvent implements EventInterface
{
    /**
     * The name of the scene the item is in
     *
     * @var string
     */
    public string $sceneName;
    /**
     * The UUID of the scene the item is in
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
     * New transform/crop info of the scene item
     *
     * @var array
     */
    public array $sceneItemTransform;
    /**
     * @param array $sceneItemTransform
     */
    public function __construct(string $sceneName, string $sceneUuid, int $sceneItemId, array $sceneItemTransform)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemTransform = $sceneItemTransform;
    }
}
