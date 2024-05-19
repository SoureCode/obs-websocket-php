<?php

namespace SoureCode\OBS\Protocol\Event\Transitions;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene transition has completed fully.
 *
 * Note: Does not appear to trigger when the transition is interrupted by the user.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 * @eventSubscription Transitions
 */
final readonly class SceneTransitionEndedEvent implements EventInterface
{
    /**
     * Scene transition name
     *
     * @var string
     */
    public string $transitionName;
    /**
     * Scene transition UUID
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
