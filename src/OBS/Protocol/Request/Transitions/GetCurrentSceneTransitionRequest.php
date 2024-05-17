<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets information about the current scene transition.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class GetCurrentSceneTransitionRequest implements RequestInterface
{
    public function __construct()
    {
    }
}