<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the status of an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class GetOutputStatusRequest implements RequestInterface
{
    /**
     * Output name
     */
    public string $outputName;

    public function __construct(string $outputName)
    {
        $this->outputName = $outputName;
    }
}
