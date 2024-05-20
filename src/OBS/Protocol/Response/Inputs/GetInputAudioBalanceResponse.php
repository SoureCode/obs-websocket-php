<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the audio balance of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputAudioBalanceResponse implements ResponseInterface
{
    /**
     * Audio balance value from 0.0-1.0
     *
     * @var float
     */
    public float $inputAudioBalance;

    public function __construct(float $inputAudioBalance)
    {
        $this->inputAudioBalance = $inputAudioBalance;
    }
}
