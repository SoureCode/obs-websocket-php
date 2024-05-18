<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Removes an existing input.
 * 
 * Note: Will immediately remove all associated scene items.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class RemoveInputRequest implements RequestInterface
{
    /**
     * Name of the input to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to remove
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $inputUuid;
    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}