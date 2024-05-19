<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the current program scene.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class SetCurrentProgramSceneResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
