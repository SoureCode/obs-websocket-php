<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Creates a new scene in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class CreateSceneRequest implements RequestInterface
{
    /**
     * Name for the new scene
     */
    public string $sceneName;

    public function __construct(string $sceneName)
    {
        $this->sceneName = $sceneName;
    }
}
