<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the duration of the current scene transition, if it is not fixed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class SetCurrentSceneTransitionDurationResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}