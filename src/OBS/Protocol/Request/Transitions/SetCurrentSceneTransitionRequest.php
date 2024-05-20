<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the current scene transition.
 *
 * Small note: While the namespace of scene transitions is generally unique, that uniqueness is not a guarantee as it is with other resources like inputs.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class SetCurrentSceneTransitionRequest implements RequestInterface
{
    /**
     * Name of the transition to make active
     */
    public string $transitionName;

    public function __construct(string $transitionName)
    {
        $this->transitionName = $transitionName;
    }
}
