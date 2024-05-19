<?php

namespace SoureCode\OBS\Protocol\Response\Stream;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Starts the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category stream
 */
final readonly class StartStreamResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
