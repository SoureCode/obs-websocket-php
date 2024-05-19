<?php

namespace SoureCode\OBS\Protocol\Request\Record;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Toggles pause on the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class ToggleRecordPauseRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
