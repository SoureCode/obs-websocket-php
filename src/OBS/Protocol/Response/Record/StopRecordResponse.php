<?php

namespace SoureCode\OBS\Protocol\Response\Record;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Stops the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class StopRecordResponse implements ResponseInterface
{
    /**
     * File name for the saved recording
     *
     * @var string
     */
    public string $outputPath;
    public function __construct(string $outputPath)
    {
        $this->outputPath = $outputPath;
    }
}
