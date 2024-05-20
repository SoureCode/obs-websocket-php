<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the audio monitor type of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputAudioMonitorTypeRequest implements RequestInterface
{
    /**
     * Audio monitor type
     *
     * @var string
     */
    public string $monitorType;
    /**
     * Name of the input to set the audio monitor type of
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the audio monitor type of
     *
     * @var ?string
     */
    public ?string $inputUuid;

    public function __construct(string $monitorType, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->monitorType = $monitorType;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
