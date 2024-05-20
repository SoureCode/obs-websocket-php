<?php

namespace SoureCode\OBS\Protocol\Response\Record;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the status of the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category record
 */
final readonly class GetRecordStatusResponse implements ResponseInterface
{
    /**
     * Whether the output is active
     */
    public bool $outputActive;
    /**
     * Whether the output is paused
     */
    public bool $outputPaused;
    /**
     * Current formatted timecode string for the output
     */
    public string $outputTimecode;
    /**
     * Current duration in milliseconds for the output
     */
    public int $outputDuration;
    /**
     * Number of bytes sent by the output
     */
    public int $outputBytes;

    public function __construct(bool $outputActive, bool $outputPaused, string $outputTimecode, int $outputDuration, int $outputBytes)
    {
        $this->outputActive = $outputActive;
        $this->outputPaused = $outputPaused;
        $this->outputTimecode = $outputTimecode;
        $this->outputDuration = $outputDuration;
        $this->outputBytes = $outputBytes;
    }
}
