<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the blend mode of a scene item.
 * 
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scene items
 */
final readonly class SetSceneItemBlendModeResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}