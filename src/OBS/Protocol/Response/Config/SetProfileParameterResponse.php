<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the value of a parameter in the current profile's configuration.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class SetProfileParameterResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
