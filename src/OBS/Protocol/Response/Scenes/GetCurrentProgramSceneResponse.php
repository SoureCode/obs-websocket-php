<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the current program scene.
 * 
 * Note: This request is slated to have the `currentProgram`-prefixed fields removed from in an upcoming RPC version.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class GetCurrentProgramSceneResponse implements ResponseInterface
{
    /**
     * Current program scene name
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $sceneName;
    /**
     * Current program scene UUID
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $sceneUuid;
    /**
     * Current program scene name (Deprecated)
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentProgramSceneName;
    /**
     * Current program scene UUID (Deprecated)
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentProgramSceneUuid;
    public function __construct(string $sceneName, string $sceneUuid, string $currentProgramSceneName, string $currentProgramSceneUuid)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->currentProgramSceneName = $currentProgramSceneName;
        $this->currentProgramSceneUuid = $currentProgramSceneUuid;
    }
}