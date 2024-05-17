<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets an array of all available input kinds in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputKindListResponse implements ResponseInterface
{
    /**
     * Array of input kinds
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array<string>
     */
    public array $inputKinds;
    public function __construct(array $inputKinds)
    {
        $this->inputKinds = $inputKinds;
    }
}