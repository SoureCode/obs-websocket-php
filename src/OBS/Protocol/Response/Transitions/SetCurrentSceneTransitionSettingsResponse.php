<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the settings of the current scene transition.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class SetCurrentSceneTransitionSettingsResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
