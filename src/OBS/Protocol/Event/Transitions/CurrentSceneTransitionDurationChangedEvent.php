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
 * @eventSubscription Transitions
 */
final readonly class CurrentSceneTransitionDurationChangedEvent implements EventInterface
{
    /**
     * Transition duration in milliseconds
     *
     * @var int
     */
    public int $transitionDuration;
    public function __construct(int $transitionDuration)
    {
        $this->transitionDuration = $transitionDuration;
    }
}
