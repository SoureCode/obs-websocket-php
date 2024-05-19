<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the scene transition overridden for a scene.
 *
 * Note: A transition UUID response field is not currently able to be implemented as of 2024-1-18.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetSceneSceneTransitionOverrideRequest implements RequestInterface
{
    /**
     * Name of the scene
     *
     * @var ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene
     *
     * @var ?string
     */
    public ?string $sceneUuid;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
