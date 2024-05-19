<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets data about the current plugin and RPC version.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 */
final readonly class GetVersionRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
