<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets a list of connected monitors and information about them.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category ui
 */
final readonly class GetMonitorListResponse implements ResponseInterface
{
    /**
     * a list of detected monitors with some information
     *
     * @var array<object>
     */
    public array $monitors;
    public function __construct(array $monitors)
    {
        $this->monitors = $monitors;
    }
}
