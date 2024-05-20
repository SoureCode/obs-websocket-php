<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the duration of the current scene transition, if it is not fixed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class SetCurrentSceneTransitionDurationRequest implements RequestInterface
{
    /**
     * Duration in milliseconds
     *
     * @var int
     */
    public int $transitionDuration;

    public function __construct(int $transitionDuration)
    {
        $this->transitionDuration = $transitionDuration;
    }
}
