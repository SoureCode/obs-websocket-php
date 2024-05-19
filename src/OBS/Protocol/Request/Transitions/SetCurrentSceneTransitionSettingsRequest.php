<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the settings of the current scene transition.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class SetCurrentSceneTransitionSettingsRequest implements RequestInterface
{
    /**
     * Settings object to apply to the transition. Can be `{}`
     *
     * @var array
     */
    public array $transitionSettings;
    /**
     * Whether to overlay over the current settings or replace them
     *
     * @var ?bool
     */
    public ?bool $overlay;
    public function __construct(array $transitionSettings, ?bool $overlay = null)
    {
        $this->transitionSettings = $transitionSettings;
        $this->overlay = $overlay;
    }
}
