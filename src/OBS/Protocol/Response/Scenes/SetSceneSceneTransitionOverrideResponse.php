<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the scene transition overridden for a scene.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class SetSceneSceneTransitionOverrideResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}