<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the current preview scene.
 *
 * Only available when studio mode is enabled.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class SetCurrentPreviewSceneRequest implements RequestInterface
{
    /**
     * Scene name to set as the current preview scene
     */
    public ?string $sceneName;
    /**
     * Scene UUID to set as the current preview scene
     */
    public ?string $sceneUuid;

    public function __construct(?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
