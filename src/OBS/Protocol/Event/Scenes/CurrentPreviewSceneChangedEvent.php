<?php

namespace SoureCode\OBS\Protocol\Event\Scenes;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The current preview scene has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class CurrentPreviewSceneChangedEvent implements EventInterface
{
    /**
     * Name of the scene that was switched to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneName;
    /**
     * UUID of the scene that was switched to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sceneUuid;
    public function __construct(string $sceneName, string $sceneUuid)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}