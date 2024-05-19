<?php

namespace SoureCode\OBS\Protocol\Response\Stream;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sends CEA-608 caption text over the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category stream
 */
final readonly class SendStreamCaptionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
