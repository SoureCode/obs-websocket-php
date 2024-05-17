<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the transform and crop info of a scene item.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class SetSceneItemTransformResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}