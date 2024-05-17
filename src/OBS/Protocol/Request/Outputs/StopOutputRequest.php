<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Stops an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class StopOutputRequest implements RequestInterface
{
    /**
     * Output name
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $outputName;
    public function __construct(string $outputName)
    {
        $this->outputName = $outputName;
    }
}