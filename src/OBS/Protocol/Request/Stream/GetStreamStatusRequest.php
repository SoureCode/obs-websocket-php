<?php

namespace SoureCode\OBS\Protocol\Request\Stream;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the status of the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category stream
 */
final readonly class GetStreamStatusRequest implements RequestInterface
{
    public function __construct()
    {
    }
}