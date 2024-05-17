<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * An input's settings have changed (been updated).
 * 
 * Note: On some inputs, changing values in the properties dialog will cause an immediate update. Pressing the "Cancel" button will revert the settings, resulting in another event being fired.
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class InputSettingsChangedEvent implements EventInterface
{
    /**
     * Name of the input
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputName;
    /**
     * UUID of the input
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputUuid;
    /**
     * New settings object of the input
     *
     * @since 5.4.0
     * @rpcVersion 1
     * @type array
     */
    public array $inputSettings;
    public function __construct(string $inputName, string $inputUuid, array $inputSettings)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputSettings = $inputSettings;
    }
}