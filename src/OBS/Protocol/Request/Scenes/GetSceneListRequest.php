<?php

namespace SoureCode\OBS\Protocol\Request\Scenes;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets an array of all scenes in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetSceneListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}