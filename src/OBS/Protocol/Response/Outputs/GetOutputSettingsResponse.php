<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the settings of an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class GetOutputSettingsResponse implements ResponseInterface
{
    /**
     * Output settings
     *
     * @var array
     */
    public array $outputSettings;
    public function __construct(array $outputSettings)
    {
        $this->outputSettings = $outputSettings;
    }
}
