<?php

namespace SoureCode\OBS\Protocol\Response\Stream;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the status of the stream output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category stream
 */
final readonly class GetStreamStatusResponse implements ResponseInterface
{
    /**
     * Whether the output is active
     *
     * @var bool
     */
    public bool $outputActive;
    /**
     * Whether the output is currently reconnecting
     *
     * @var bool
     */
    public bool $outputReconnecting;
    /**
     * Current formatted timecode string for the output
     *
     * @var string
     */
    public string $outputTimecode;
    /**
     * Current duration in milliseconds for the output
     *
     * @var int
     */
    public int $outputDuration;
    /**
     * Congestion of the output
     *
     * @var int
     */
    public int $outputCongestion;
    /**
     * Number of bytes sent by the output
     *
     * @var int
     */
    public int $outputBytes;
    /**
     * Number of frames skipped by the output's process
     *
     * @var int
     */
    public int $outputSkippedFrames;
    /**
     * Total number of frames delivered by the output's process
     *
     * @var int
     */
    public int $outputTotalFrames;
    public function __construct(bool $outputActive, bool $outputReconnecting, string $outputTimecode, int $outputDuration, int $outputCongestion, int $outputBytes, int $outputSkippedFrames, int $outputTotalFrames)
    {
        $this->outputActive = $outputActive;
        $this->outputReconnecting = $outputReconnecting;
        $this->outputTimecode = $outputTimecode;
        $this->outputDuration = $outputDuration;
        $this->outputCongestion = $outputCongestion;
        $this->outputBytes = $outputBytes;
        $this->outputSkippedFrames = $outputSkippedFrames;
        $this->outputTotalFrames = $outputTotalFrames;
    }
}
