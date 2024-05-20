<?php

namespace SoureCode\OBS\Protocol\Event\Scenes;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The name of a scene has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 * @eventSubscription Scenes
 */
final readonly class SceneNameChangedEvent implements EventInterface
{
    /**
     * UUID of the scene
     *
     * @var string
     */
    public string $sceneUuid;
    /**
     * Old name of the scene
     *
     * @var string
     */
    public string $oldSceneName;
    /**
     * New name of the scene
     *
     * @var string
     */
    public string $sceneName;

    public function __construct(string $sceneUuid, string $oldSceneName, string $sceneName)
    {
        $this->sceneUuid = $sceneUuid;
        $this->oldSceneName = $oldSceneName;
        $this->sceneName = $sceneName;
    }
}
