<?php

namespace SoureCode\OBS\Protocol\Response\MediaInputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the cursor position of a media input.
 *
 * This request does not perform bounds checking of the cursor position.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class SetMediaInputCursorResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
