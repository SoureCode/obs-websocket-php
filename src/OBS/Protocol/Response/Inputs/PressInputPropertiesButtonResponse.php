<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;
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
final readonly class PressInputPropertiesButtonResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}