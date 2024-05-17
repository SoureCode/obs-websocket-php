<?php

namespace SoureCode\OBS\Protocol\Event\Transitions;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A scene transition has started.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class SceneTransitionStartedEvent implements EventInterface
{
    /**
     * Scene transition name
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $transitionName;
    /**
     * Scene transition UUID
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $transitionUuid;
    public function __construct(string $transitionName, string $transitionUuid)
    {
        $this->transitionName = $transitionName;
        $this->transitionUuid = $transitionUuid;
    }
}