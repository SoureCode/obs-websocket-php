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
     * Array of transitions
     *
     * @var array<object>
     */
    public array $transitions;
    /**
     * Name of the current scene transition. Can be null
     *
     * @var ?string
     */
    public ?string $currentSceneTransitionName;
    /**
     * UUID of the current scene transition. Can be null
     *
     * @var ?string
     */
    public ?string $currentSceneTransitionUuid;
    /**
     * Kind of the current scene transition. Can be null
     *
     * @var ?string
     */
    public ?string $currentSceneTransitionKind;
    public function __construct(array $transitions, ?string $currentSceneTransitionName = null, ?string $currentSceneTransitionUuid = null, ?string $currentSceneTransitionKind = null)
    {
        $this->transitions = $transitions;
        $this->currentSceneTransitionName = $currentSceneTransitionName;
        $this->currentSceneTransitionUuid = $currentSceneTransitionUuid;
        $this->currentSceneTransitionKind = $currentSceneTransitionKind;
    }
}
