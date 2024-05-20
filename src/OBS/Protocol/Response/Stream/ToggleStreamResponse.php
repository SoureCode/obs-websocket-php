<?php

namespace SoureCode\OBS\Protocol\Response\Stream;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Toggles the status of the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category stream
 */
final readonly class ToggleStreamResponse implements ResponseInterface
{
    /**
     * New state of the stream output
     */
    public bool $outputActive;

    public function __construct(bool $outputActive)
    {
        $this->outputActive = $outputActive;
    }
}
