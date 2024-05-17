<?php

namespace SoureCode\OBS\Protocol\Event\Transitions;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The current scene transition duration has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class CurrentSceneTransitionDurationChangedEvent implements EventInterface
{
    /**
     * Transition duration in milliseconds
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $transitionDuration;
    public function __construct(int $transitionDuration)
    {
        $this->transitionDuration = $transitionDuration;
    }
}