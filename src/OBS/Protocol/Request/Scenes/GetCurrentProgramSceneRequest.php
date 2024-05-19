<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the current program scene.
 *
 * Note: This request is slated to have the `currentProgram`-prefixed fields removed from in an upcoming RPC version.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class GetCurrentProgramSceneRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
