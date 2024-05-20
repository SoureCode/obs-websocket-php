<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the audio balance of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputAudioBalanceRequest implements RequestInterface
{
    /**
     * New audio balance value
     */
    public int $inputAudioBalance;
    /**
     * Name of the input to set the audio balance of
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the audio balance of
     */
    public ?string $inputUuid;

    public function __construct(int $inputAudioBalance, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputAudioBalance = $inputAudioBalance;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
