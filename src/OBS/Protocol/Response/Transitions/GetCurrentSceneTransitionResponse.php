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
     */
    public string $transitionName;
    /**
     * UUID of the transition
     */
    public string $transitionUuid;
    /**
     * Kind of the transition
     */
    public string $transitionKind;
    /**
     * Whether the transition uses a fixed (unconfigurable) duration
     */
    public bool $transitionFixed;
    /**
     * Whether the transition supports being configured
     */
    public bool $transitionConfigurable;
    /**
     * Configured transition duration in milliseconds. `null` if transition is fixed
     */
    public ?int $transitionDuration;
    /**
     * Object of settings for the transition. `null` if transition is not configurable
     *
     * @var array
     */
    public ?array $transitionSettings;
    /**
     * @param ?array $transitionSettings
     */
    public function __construct(string $transitionName, string $transitionUuid, string $transitionKind, bool $transitionFixed, bool $transitionConfigurable, ?int $transitionDuration = null, ?array $transitionSettings = null)
    {
        $this->transitionName = $transitionName;
        $this->transitionUuid = $transitionUuid;
        $this->transitionKind = $transitionKind;
        $this->transitionFixed = $transitionFixed;
        $this->transitionConfigurable = $transitionConfigurable;
        $this->transitionDuration = $transitionDuration;
        $this->transitionSettings = $transitionSettings;
    }
}
