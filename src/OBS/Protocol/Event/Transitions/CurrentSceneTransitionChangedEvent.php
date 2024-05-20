<?php

namespace SoureCode\OBS\Protocol\Event\Transitions;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The current scene transition has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 * @eventSubscription Transitions
 */
final readonly class CurrentSceneTransitionChangedEvent implements EventInterface
{
    /**
     * Name of the new transition
     *
     * @var string
     */
    public string $transitionName;
    /**
     * UUID of the new transition
     *
     * @var string
     */
    public string $transitionUuid;

    public function __construct(string $transitionName, string $transitionUuid)
    {
        $this->transitionName = $transitionName;
        $this->transitionUuid = $transitionUuid;
    }
}
