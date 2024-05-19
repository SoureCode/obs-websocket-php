<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the items of a list property from an input's properties.
 *
 * Note: Use this in cases where an input provides a dynamic, selectable list of items. For example, display capture, where it provides a list of available displays.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category inputs
 */
final readonly class GetInputPropertiesListPropertyItemsRequest implements RequestInterface
{
    /**
     * Name of the list property to get the items of
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
