<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all inputs in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputListResponse implements ResponseInterface
{
    /**
     * Array of inputs
     *
     * @var array<object>
     */
    public array $inputs;
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }
}
