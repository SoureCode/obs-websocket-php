<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the list of available outputs.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class GetOutputListResponse implements ResponseInterface
{
    /**
     * Array of outputs
     *
     * @var array<object>
     */
    public array $outputs;
    public function __construct(array $outputs)
    {
        $this->outputs = $outputs;
    }
}
