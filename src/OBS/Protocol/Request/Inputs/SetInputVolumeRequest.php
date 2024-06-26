<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the volume setting of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class SetInputVolumeRequest implements RequestInterface
{
    /**
     * Name of the input to set the volume of
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the volume of
     */
    public ?string $inputUuid;
    /**
     * Volume setting in mul
     */
    public ?int $inputVolumeMul;
    /**
     * Volume setting in dB
     */
    public ?int $inputVolumeDb;

    public function __construct(?string $inputName = null, ?string $inputUuid = null, ?int $inputVolumeMul = null, ?int $inputVolumeDb = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputVolumeMul = $inputVolumeMul;
        $this->inputVolumeDb = $inputVolumeDb;
    }
}
