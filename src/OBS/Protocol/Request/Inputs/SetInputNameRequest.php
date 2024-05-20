<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the name of an input (rename).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class SetInputNameRequest implements RequestInterface
{
    /**
     * New name for the input
     */
    public string $newInputName;
    /**
     * Current input name
     */
    public ?string $inputName;
    /**
     * Current input UUID
     */
    public ?string $inputUuid;

    public function __construct(string $newInputName, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->newInputName = $newInputName;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
