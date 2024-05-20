<?php

namespace SoureCode\OBS\Protocol\Event\Transitions;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A scene transition's video has completed fully.
 *
 * Useful for stinger transitions to tell when the video *actually* ends.
 * `SceneTransitionEnded` only signifies the cut point, not the completion of transition playback.
 *
 * Note: Appears to be called by every transition, regardless of relevance.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 * @eventSubscription Transitions
 */
final readonly class SceneTransitionVideoEndedEvent implements EventInterface
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
