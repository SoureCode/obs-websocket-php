<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the current preview scene.
 * 
 * Only available when studio mode is enabled.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category scenes
 */
final readonly class SetCurrentPreviewSceneResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}