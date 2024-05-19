<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Presses a button in the properties of an input.
 *
 * Some known `propertyName` values are:
 *
 * - `refreshnocache` - Browser source reload button
 *
 * Note: Use this in cases where there is a button in the properties of an input that cannot be accessed in any other way. For example, browser sources, where there is a refresh button.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category inputs
 */
final readonly class PressInputPropertiesButtonRequest implements RequestInterface
{
    /**
     * Name of the button property to press
     *
     * @var string
     */
    public string $propertyName;
    /**
     * Name of the input
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input
     *
     * @var ?string
     */
    public ?string $inputUuid;
    public function __construct(string $propertyName, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->propertyName = $propertyName;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
