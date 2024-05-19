<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Triggers the current scene transition. Same functionality as the `Transition` button in studio mode.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category transitions
 */
final readonly class TriggerStudioModeTransitionRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
