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
 */
final readonly class SceneItemTransformChangedEvent implements EventInterface
{
    /**
     * The name of the scene the item is in
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneName;
    /**
     * The UUID of the scene the item is in
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
     * New transform/crop info of the scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $sceneItemTransform;
    public function __construct(string $sceneName, string $sceneUuid, int $sceneItemId, array $sceneItemTransform)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemTransform = $sceneItemTransform;
    }
}