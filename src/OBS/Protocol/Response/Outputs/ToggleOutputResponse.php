<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Toggles the status of an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class ToggleOutputResponse implements ResponseInterface
{
    /**
     * Whether the output is active
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $outputActive;
    public function __construct(bool $outputActive)
    {
        $this->outputActive = $outputActive;
    }
}