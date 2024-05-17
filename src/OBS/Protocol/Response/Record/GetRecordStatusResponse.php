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
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $outputActive;
    /**
     * Whether the output is paused
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $outputPaused;
    /**
     * Current formatted timecode string for the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $outputTimecode;
    /**
     * Current duration in milliseconds for the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $outputDuration;
    /**
     * Number of bytes sent by the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
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