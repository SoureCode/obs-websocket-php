<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetCurrentSceneTransitionCursorResponse implements ResponseInterface
{
    /**
     * Cursor position, between 0.0 and 1.0
     *
     * @var float
     */
    public float $transitionCursor;

    public function __construct(float $transitionCursor)
    {
        $this->transitionCursor = $transitionCursor;
    }
}
