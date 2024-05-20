<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Creates a new scene in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class CreateSceneResponse implements ResponseInterface
{
    /**
     * UUID of the created scene
     */
    public string $sceneUuid;

    public function __construct(string $sceneUuid)
    {
        $this->sceneUuid = $sceneUuid;
    }
}
