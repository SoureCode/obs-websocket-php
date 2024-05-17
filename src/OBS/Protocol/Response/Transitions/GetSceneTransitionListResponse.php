<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets an array of all scene transitions in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class GetSceneTransitionListResponse implements ResponseInterface
{
    /**
     * Name of the current scene transition. Can be null
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentSceneTransitionName;
    /**
     * UUID of the current scene transition. Can be null
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentSceneTransitionUuid;
    /**
     * Kind of the current scene transition. Can be null
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $currentSceneTransitionKind;
    /**
     * Array of transitions
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array<object>
     */
    public array $transitions;
    public function __construct(string $currentSceneTransitionName, string $currentSceneTransitionUuid, string $currentSceneTransitionKind, array $transitions)
    {
        $this->currentSceneTransitionName = $currentSceneTransitionName;
        $this->currentSceneTransitionUuid = $currentSceneTransitionUuid;
        $this->currentSceneTransitionKind = $currentSceneTransitionKind;
        $this->transitions = $transitions;
    }
}