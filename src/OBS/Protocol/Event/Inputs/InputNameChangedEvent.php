<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The name of an input has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputNameChangedEvent implements EventInterface
{
    /**
     * UUID of the input
     *
     * @var string
     */
    public string $inputUuid;
    /**
     * Old name of the input
     *
     * @var string
     */
    public string $oldInputName;
    /**
     * New name of the input
     *
     * @var string
     */
    public string $inputName;

    public function __construct(string $inputUuid, string $oldInputName, string $inputName)
    {
        $this->inputUuid = $inputUuid;
        $this->oldInputName = $oldInputName;
        $this->inputName = $inputName;
    }
}
