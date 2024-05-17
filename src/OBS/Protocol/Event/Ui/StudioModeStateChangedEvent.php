<?php

namespace SoureCode\OBS\Protocol\Event\Ui;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * Studio mode has been enabled or disabled.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class StudioModeStateChangedEvent implements EventInterface
{
    /**
     * True == Enabled, False == Disabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $studioModeEnabled;
    public function __construct(bool $studioModeEnabled)
    {
        $this->studioModeEnabled = $studioModeEnabled;
    }
}