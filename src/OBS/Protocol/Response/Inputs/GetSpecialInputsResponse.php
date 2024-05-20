<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the names of all special inputs.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetSpecialInputsResponse implements ResponseInterface
{
    /**
     * Name of the Desktop Audio input
     */
    public ?string $desktop1;
    /**
     * Name of the Desktop Audio 2 input
     */
    public ?string $desktop2;
    /**
     * Name of the Mic/Auxiliary Audio input
     */
    public ?string $mic1;
    /**
     * Name of the Mic/Auxiliary Audio 2 input
     */
    public ?string $mic2;
    /**
     * Name of the Mic/Auxiliary Audio 3 input
     */
    public ?string $mic3;
    /**
     * Name of the Mic/Auxiliary Audio 4 input
     */
    public ?string $mic4;

    public function __construct(?string $desktop1 = null, ?string $desktop2 = null, ?string $mic1 = null, ?string $mic2 = null, ?string $mic3 = null, ?string $mic4 = null)
    {
        $this->desktop1 = $desktop1;
        $this->desktop2 = $desktop2;
        $this->mic1 = $mic1;
        $this->mic2 = $mic2;
        $this->mic3 = $mic3;
        $this->mic4 = $mic4;
    }
}
