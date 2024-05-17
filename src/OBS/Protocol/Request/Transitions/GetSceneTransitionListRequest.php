<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets an array of all scene transitions in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class GetSceneTransitionListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}