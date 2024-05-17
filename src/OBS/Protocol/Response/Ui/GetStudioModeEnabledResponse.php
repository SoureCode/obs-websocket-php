<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets whether studio is enabled.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class GetStudioModeEnabledResponse implements ResponseInterface
{
    /**
     * Whether studio mode is enabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $studioModeEnabled;
    public function __construct(bool $studioModeEnabled)
    {
        $this->studioModeEnabled = $studioModeEnabled;
    }
}