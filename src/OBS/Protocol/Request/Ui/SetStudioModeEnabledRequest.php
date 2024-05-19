<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Enables or disables studio mode
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class SetStudioModeEnabledRequest implements RequestInterface
{
    /**
     * True == Enabled, False == Disabled
     *
     * @var bool
     */
    public bool $studioModeEnabled;
    public function __construct(bool $studioModeEnabled)
    {
        $this->studioModeEnabled = $studioModeEnabled;
    }
}
