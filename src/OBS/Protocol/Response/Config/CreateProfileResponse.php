<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Creates a new profile, switching to it in the process
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class CreateProfileResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}