<?php

namespace SoureCode\OBS\Protocol\Event\SceneItems;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene item has been selected in the Ui.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scene items
 * @eventSubscription SceneItems
 */
final readonly class SceneItemSelectedEvent implements EventInterface
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
    public function __construct(string $sceneName, string $sceneUuid, int $sceneItemId)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->sceneItemId = $sceneItemId;
    }
}
