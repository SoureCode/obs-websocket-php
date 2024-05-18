<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the scene transition overridden for a scene.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class SetSceneSceneTransitionOverrideRequest implements RequestInterface
{
    /**
     * Name of the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneUuid;
    /**
     * Name of the scene transition to use as override. Specify `null` to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $transitionName;
    /**
     * Duration to use for any overridden transition. Specify `null` to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?int
     */
    public ?int $transitionDuration;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null, ?string $transitionName = null, ?int $transitionDuration = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->transitionName = $transitionName;
        $this->transitionDuration = $transitionDuration;
    }
}