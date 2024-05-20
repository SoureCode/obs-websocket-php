<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The monitor type of an input has changed.
 *
 * Available types are:
 *
 * - `OBS_MONITORING_TYPE_NONE`
 * - `OBS_MONITORING_TYPE_MONITOR_ONLY`
 * - `OBS_MONITORING_TYPE_MONITOR_AND_OUTPUT`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputAudioMonitorTypeChangedEvent implements EventInterface
{
    /**
     * Name of the input
     *
     * @var string
     */
    public string $inputName;
    /**
     * UUID of the input
     *
     * @var string
     */
    public string $inputUuid;
    /**
     * New monitor type of the input
     *
     * @var string
     */
    public string $monitorType;

    public function __construct(string $inputName, string $inputUuid, string $monitorType)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->monitorType = $monitorType;
    }
}
