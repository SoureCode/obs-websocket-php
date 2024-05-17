<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the name of an input (rename).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputNameResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}