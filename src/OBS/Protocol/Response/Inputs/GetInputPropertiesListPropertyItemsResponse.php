<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetInputPropertiesListPropertyItemsResponse implements ResponseInterface
{
    /**
     * Array of items in the list property
     *
     * @var array<object>
     */
    public array $propertyItems;
    public function __construct(array $propertyItems)
    {
        $this->propertyItems = $propertyItems;
    }
}
