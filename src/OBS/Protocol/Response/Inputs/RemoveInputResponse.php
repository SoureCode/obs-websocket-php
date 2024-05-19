<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Removes an existing input.
 *
 * Note: Will immediately remove all associated scene items.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class RemoveInputResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
