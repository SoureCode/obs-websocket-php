<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the name of a scene (rename).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class SetSceneNameRequest implements RequestInterface
{
    /**
     * New name for the scene
     */
    public string $newSceneName;
    /**
     * Name of the scene to be renamed
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to be renamed
     */
    public ?string $sceneUuid;

    public function __construct(string $newSceneName, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->newSceneName = $newSceneName;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
