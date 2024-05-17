<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Switches to a profile.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 */
final readonly class SetCurrentProfileResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}