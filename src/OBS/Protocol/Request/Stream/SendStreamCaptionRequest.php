<?php

namespace SoureCode\OBS\Protocol\Request\Stream;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sends CEA-608 caption text over the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category stream
 */
final readonly class SendStreamCaptionRequest implements RequestInterface
{
    /**
     * Caption text
     *
     * @var string
     */
    public string $captionText;
    public function __construct(string $captionText)
    {
        $this->captionText = $captionText;
    }
}
