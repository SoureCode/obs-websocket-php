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
     * Array of scenes
     *
     * @var array<object>
     */
    public array $scenes;
    /**
     * Current program scene name. Can be `null` if internal state desync
     */
    public ?string $currentProgramSceneName;
    /**
     * Current program scene UUID. Can be `null` if internal state desync
     */
    public ?string $currentProgramSceneUuid;
    /**
     * Current preview scene name. `null` if not in studio mode
     */
    public ?string $currentPreviewSceneName;
    /**
     * Current preview scene UUID. `null` if not in studio mode
     */
    public ?string $currentPreviewSceneUuid;
    /**
     * @param array<object> $scenes
     */
    public function __construct(array $scenes, ?string $currentProgramSceneName = null, ?string $currentProgramSceneUuid = null, ?string $currentPreviewSceneName = null, ?string $currentPreviewSceneUuid = null)
    {
        $this->scenes = $scenes;
        $this->currentProgramSceneName = $currentProgramSceneName;
        $this->currentProgramSceneUuid = $currentProgramSceneUuid;
        $this->currentPreviewSceneName = $currentPreviewSceneName;
        $this->currentPreviewSceneUuid = $currentPreviewSceneUuid;
    }
}
