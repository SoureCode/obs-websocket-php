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
     * @var string
     */
    public string $outputName;
    /**
     * Output settings
     *
     * @var array
     */
    public array $outputSettings;
    /**
     * @param array $outputSettings
     */
    public function __construct(string $outputName, array $outputSettings)
    {
        $this->outputName = $outputName;
        $this->outputSettings = $outputSettings;
    }
}
