<?php

namespace SoureCode\OBS\Protocol\Response\Record;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Toggles pause on the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class ToggleRecordPauseResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}