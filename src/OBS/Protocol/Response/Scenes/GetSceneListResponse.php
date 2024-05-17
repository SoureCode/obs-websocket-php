<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets an array of all scenes in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetSceneListResponse implements ResponseInterface
{
    /**
     * Current program scene name. Can be `null` if internal state desync
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentProgramSceneName;
    /**
     * Current program scene UUID. Can be `null` if internal state desync
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentProgramSceneUuid;
    /**
     * Current preview scene name. `null` if not in studio mode
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentPreviewSceneName;
    /**
     * Current preview scene UUID. `null` if not in studio mode
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentPreviewSceneUuid;
    /**
     * Array of scenes
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array<object>
     */
    public array $scenes;
    public function __construct(string $currentProgramSceneName, string $currentProgramSceneUuid, string $currentPreviewSceneName, string $currentPreviewSceneUuid, array $scenes)
    {
        $this->currentProgramSceneName = $currentProgramSceneName;
        $this->currentProgramSceneUuid = $currentProgramSceneUuid;
        $this->currentPreviewSceneName = $currentPreviewSceneName;
        $this->currentPreviewSceneUuid = $currentPreviewSceneUuid;
        $this->scenes = $scenes;
    }
}