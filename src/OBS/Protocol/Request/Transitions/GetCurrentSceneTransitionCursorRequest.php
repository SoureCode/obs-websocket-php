<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the cursor position of the current scene transition.
 * 
 * Note: `transitionCursor` will return 1.0 when the transition is inactive.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class GetCurrentSceneTransitionCursorRequest implements RequestInterface
{
    public function __construct()
    {
    }
}