<?php

namespace SoureCode\OBS\Protocol\Request\Stream;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Stops the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category stream
 */
final readonly class StopStreamRequest implements RequestInterface
{
    public function __construct()
    {
    }
}