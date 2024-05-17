<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Triggers the current scene transition. Same functionality as the `Transition` button in studio mode.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category transitions
 */
final readonly class TriggerStudioModeTransitionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}