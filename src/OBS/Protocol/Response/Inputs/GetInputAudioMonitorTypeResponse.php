<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetInputAudioMonitorTypeResponse implements ResponseInterface
{
    /**
     * Audio monitor type
     */
    public string $monitorType;

    public function __construct(string $monitorType)
    {
        $this->monitorType = $monitorType;
    }
}
