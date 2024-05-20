<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the audio mute state of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputMuteResponse implements ResponseInterface
{
    /**
     * Whether the input is muted
     *
     * @var bool
     */
    public bool $inputMuted;

    public function __construct(bool $inputMuted)
    {
        $this->inputMuted = $inputMuted;
    }
}
