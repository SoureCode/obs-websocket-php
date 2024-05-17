<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets information about the current scene transition.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class GetCurrentSceneTransitionResponse implements ResponseInterface
{
    /**
     * Name of the transition
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $transitionName;
    /**
     * UUID of the transition
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $transitionUuid;
    /**
     * Kind of the transition
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $transitionKind;
    /**
     * Whether the transition uses a fixed (unconfigurable) duration
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $transitionFixed;
    /**
     * Configured transition duration in milliseconds. `null` if transition is fixed
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $transitionDuration;
    /**
     * Whether the transition supports being configured
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $transitionConfigurable;
    /**
     * Object of settings for the transition. `null` if transition is not configurable
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array
     */
    public array $transitionSettings;
    public function __construct(string $transitionName, string $transitionUuid, string $transitionKind, bool $transitionFixed, int $transitionDuration, bool $transitionConfigurable, array $transitionSettings)
    {
        $this->transitionName = $transitionName;
        $this->transitionUuid = $transitionUuid;
        $this->transitionKind = $transitionKind;
        $this->transitionFixed = $transitionFixed;
        $this->transitionDuration = $transitionDuration;
        $this->transitionConfigurable = $transitionConfigurable;
        $this->transitionSettings = $transitionSettings;
    }
}