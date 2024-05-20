<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the audio monitor type of an input.
 *
 * The available audio monitor types are:
 *
 * - `OBS_MONITORING_TYPE_NONE`
 * - `OBS_MONITORING_TYPE_MONITOR_ONLY`
 * - `OBS_MONITORING_TYPE_MONITOR_AND_OUTPUT`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputAudioMonitorTypeRequest implements RequestInterface
{
    /**
     * Name of the input to get the audio monitor type of
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to get the audio monitor type of
     *
     * @var ?string
     */
    public ?string $inputUuid;

    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
