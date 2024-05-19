<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Toggles the state of the virtualcam output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category outputs
 */
final readonly class ToggleVirtualCamResponse implements ResponseInterface
{
    /**
     * Whether the output is active
     *
     * @var bool
     */
    public bool $outputActive;
    public function __construct(bool $outputActive)
    {
        $this->outputActive = $outputActive;
    }
}
