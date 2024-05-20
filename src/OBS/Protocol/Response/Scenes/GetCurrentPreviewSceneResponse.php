<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the current preview scene.
 *
 * Only available when studio mode is enabled.
 *
 * Note: This request is slated to have the `currentPreview`-prefixed fields removed from in an upcoming RPC version.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class GetCurrentPreviewSceneResponse implements ResponseInterface
{
    /**
     * Current preview scene name
     */
    public string $sceneName;
    /**
     * Current preview scene UUID
     */
    public string $sceneUuid;
    /**
     * Current preview scene name
     */
    public string $currentPreviewSceneName;
    /**
     * Current preview scene UUID
     */
    public string $currentPreviewSceneUuid;

    public function __construct(string $sceneName, string $sceneUuid, string $currentPreviewSceneName, string $currentPreviewSceneUuid)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->currentPreviewSceneName = $currentPreviewSceneName;
        $this->currentPreviewSceneUuid = $currentPreviewSceneUuid;
    }
}
