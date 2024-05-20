<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the audio balance of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputAudioBalanceRequest implements RequestInterface
{
    /**
     * Name of the input to get the audio balance of
     */
    public ?string $inputName;
    /**
     * UUID of the input to get the audio balance of
     */
    public ?string $inputUuid;

    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
