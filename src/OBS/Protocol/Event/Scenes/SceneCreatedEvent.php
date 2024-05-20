<?php

namespace SoureCode\OBS\Protocol\Event\Scenes;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A new scene has been created.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 * @eventSubscription Scenes
 */
final readonly class SceneCreatedEvent implements EventInterface
{
    /**
     * Name of the new scene
     *
     * @var string
     */
    public string $sceneName;
    /**
     * UUID of the new scene
     *
     * @var string
     */
    public string $sceneUuid;
    /**
     * Whether the new scene is a group
     *
     * @var bool
     */
    public bool $isGroup;

    public function __construct(string $sceneName, string $sceneUuid, bool $isGroup)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->isGroup = $isGroup;
    }
}
