<?php

namespace SoureCode\OBS\Protocol\Response\Outputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the status of an output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category outputs
 */
final readonly class GetOutputStatusResponse implements ResponseInterface
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
     * Whether the output is reconnecting
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $outputReconnecting;
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
     * Congestion of the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $outputCongestion;
    /**
     * Number of bytes sent by the output
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $outputBytes;
    /**
     * Number of frames skipped by the output's process
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $outputSkippedFrames;
    /**
     * Total number of frames delivered by the output's process
     *
     * @since 5.0.0
     * @rpcVersion 1
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