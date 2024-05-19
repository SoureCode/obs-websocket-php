<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * An input has been created.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 * @eventSubscription Inputs
 */
final readonly class InputCreatedEvent implements EventInterface
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
     * The kind of the input
     *
     * @var string
     */
    public string $inputKind;
    /**
     * The unversioned kind of input (aka no `_v2` stuff)
     *
     * @var string
     */
    public string $unversionedInputKind;
    /**
     * The settings configured to the input when it was created
     *
     * @var array
     */
    public array $inputSettings;
    /**
     * The default settings for the input
     *
     * @var array
     */
    public array $defaultInputSettings;
    public function __construct(string $inputName, string $inputUuid, string $inputKind, string $unversionedInputKind, array $inputSettings, array $defaultInputSettings)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->inputKind = $inputKind;
        $this->unversionedInputKind = $unversionedInputKind;
        $this->inputSettings = $inputSettings;
        $this->defaultInputSettings = $defaultInputSettings;
    }
}
