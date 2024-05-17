<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets an array of all inputs in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputListRequest implements RequestInterface
{
    /**
     * Restrict the array to only inputs of the specified kind
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $inputKind;
    public function __construct(?string $inputKind = null)
    {
        $this->inputKind = $inputKind;
    }
}