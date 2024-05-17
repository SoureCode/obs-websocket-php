<?php

namespace SoureCode\OBS\Protocol\Request\Stream;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Toggles the status of the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category stream
 */
final readonly class ToggleStreamRequest implements RequestInterface
{
    public function __construct()
    {
    }
}