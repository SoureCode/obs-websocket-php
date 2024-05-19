<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * An input's volume level has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputVolumeChangedEvent implements EventInterface
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
     * New volume level multiplier
     *
     * @var int
     */
    public int $inputVolumeMul;
    /**
     * New volume level in dB
     *
     * @var int
     */
    public int $inputVolumeDb;
    public function __construct(string $inputName, string $inputUuid, int $inputVolumeMul, int $inputVolumeDb)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputVolumeMul = $inputVolumeMul;
        $this->inputVolumeDb = $inputVolumeDb;
    }
}
