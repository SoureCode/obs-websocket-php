<?php

namespace SoureCode\OBS\Protocol\Request\Outputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the settings of an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class SetOutputSettingsRequest implements RequestInterface
{
    /**
     * Output name
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $outputName;
    /**
     * Output settings
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $outputSettings;
    public function __construct(string $outputName, array $outputSettings)
    {
        $this->outputName = $outputName;
        $this->outputSettings = $outputSettings;
    }
}