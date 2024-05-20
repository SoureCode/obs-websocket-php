<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A high-volume event providing volume levels of all active inputs every 50 milliseconds.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category inputs
 * @eventSubscription InputVolumeMeters
 */
final readonly class InputVolumeMetersEvent implements EventInterface
{
    /**
     * Array of active inputs with their associated volume levels
     *
     * @var array<object>
     */
    public array $inputs;
    /**
     * @param array<object> $inputs
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }
}
