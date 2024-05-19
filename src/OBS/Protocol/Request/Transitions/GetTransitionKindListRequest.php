<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets an array of all available transition kinds.
 *
 * Similar to `GetInputKindList`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class GetTransitionKindListRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
