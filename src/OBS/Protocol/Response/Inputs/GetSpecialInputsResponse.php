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
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $desktop1;
    /**
     * Name of the Desktop Audio 2 input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $desktop2;
    /**
     * Name of the Mic/Auxiliary Audio input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $mic1;
    /**
     * Name of the Mic/Auxiliary Audio 2 input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $mic2;
    /**
     * Name of the Mic/Auxiliary Audio 3 input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $mic3;
    /**
     * Name of the Mic/Auxiliary Audio 4 input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $mic4;
    public function __construct(string $desktop1, string $desktop2, string $mic1, string $mic2, string $mic3, string $mic4)
    {
        $this->desktop1 = $desktop1;
        $this->desktop2 = $desktop2;
        $this->mic1 = $mic1;
        $this->mic2 = $mic2;
        $this->mic3 = $mic3;
        $this->mic4 = $mic4;
    }
}