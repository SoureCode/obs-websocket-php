<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the names of all special inputs.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetSpecialInputsRequest implements RequestInterface
{
    public function __construct()
    {
    }
}