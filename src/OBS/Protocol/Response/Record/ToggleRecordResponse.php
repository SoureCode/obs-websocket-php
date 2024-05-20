<?php

namespace SoureCode\OBS\Protocol\Response\Record;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Toggles the status of the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class ToggleRecordResponse implements ResponseInterface
{
    /**
     * The new active state of the output
     */
    public bool $outputActive;

    public function __construct(bool $outputActive)
    {
        $this->outputActive = $outputActive;
    }
}
