<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the current volume setting of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class GetInputVolumeResponse implements ResponseInterface
{
    /**
     * Volume setting in mul
     *
     * @var int
     */
    public int $inputVolumeMul;
    /**
     * Volume setting in dB
     *
     * @var int
     */
    public int $inputVolumeDb;
    public function __construct(int $inputVolumeMul, int $inputVolumeDb)
    {
        $this->inputVolumeMul = $inputVolumeMul;
        $this->inputVolumeDb = $inputVolumeDb;
    }
}
