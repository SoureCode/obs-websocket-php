<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Removes a scene from OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class RemoveSceneRequest implements RequestInterface
{
    /**
     * Name of the scene to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sceneUuid;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}