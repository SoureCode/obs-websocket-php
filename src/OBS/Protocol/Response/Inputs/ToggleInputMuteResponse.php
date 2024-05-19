<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Toggles the audio mute state of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class ToggleInputMuteResponse implements ResponseInterface
{
    /**
     * Whether the input has been muted or unmuted
     *
     * @var bool
     */
    public bool $inputMuted;
    public function __construct(bool $inputMuted)
    {
        $this->inputMuted = $inputMuted;
    }
}
