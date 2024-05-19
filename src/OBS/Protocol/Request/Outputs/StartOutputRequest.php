<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Starts an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class StartOutputRequest implements RequestInterface
{
    /**
     * Output name
     *
     * @var string
     */
    public string $outputName;
    public function __construct(string $outputName)
    {
        $this->outputName = $outputName;
    }
}
