<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * An input has been removed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputRemovedEvent implements EventInterface
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

    public function __construct(string $inputName, string $inputUuid)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
