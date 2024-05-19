<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Sets the audio sync offset of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class SetInputAudioSyncOffsetResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
