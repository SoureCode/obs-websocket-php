<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The audio balance value of an input has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputAudioBalanceChangedEvent implements EventInterface
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
     * New audio balance value of the input
     *
     * @var int
     */
    public int $inputAudioBalance;
    public function __construct(string $inputName, string $inputUuid, int $inputAudioBalance)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputAudioBalance = $inputAudioBalance;
    }
}
