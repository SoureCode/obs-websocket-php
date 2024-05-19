<?php

namespace SoureCode\OBS\Protocol\Response\MediaInputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Triggers an action on a media input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class TriggerMediaInputActionResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
