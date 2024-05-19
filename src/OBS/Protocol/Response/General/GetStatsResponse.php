<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets statistics about OBS, obs-websocket, and the current session.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category general
 */
final readonly class GetStatsResponse implements ResponseInterface
{
    /**
     * Current CPU usage in percent
     *
     * @var int
     */
    public int $cpuUsage;
    /**
     * Amount of memory in MB currently being used by OBS
     *
     * @var int
     */
    public int $memoryUsage;
    /**
     * Available disk space on the device being used for recording storage
     *
     * @var int
     */
    public int $availableDiskSpace;
    /**
     * Current FPS being rendered
     *
     * @var int
     */
    public int $activeFps;
    /**
     * Average time in milliseconds that OBS is taking to render a frame
     *
     * @var int
     */
    public int $averageFrameRenderTime;
    /**
     * Number of frames skipped by OBS in the render thread
     *
     * @var int
     */
    public int $renderSkippedFrames;
    /**
     * Total number of frames outputted by the render thread
     *
     * @var int
     */
    public int $renderTotalFrames;
    /**
     * Number of frames skipped by OBS in the output thread
     *
     * @var int
     */
    public int $outputSkippedFrames;
    /**
     * Total number of frames outputted by the output thread
     *
     * @var int
     */
    public int $outputTotalFrames;
    /**
     * Total number of messages received by obs-websocket from the client
     *
     * @var int
     */
    public int $webSocketSessionIncomingMessages;
    /**
     * Total number of messages sent by obs-websocket to the client
     *
     * @var int
     */
    public int $webSocketSessionOutgoingMessages;
    public function __construct(int $cpuUsage, int $memoryUsage, int $availableDiskSpace, int $activeFps, int $averageFrameRenderTime, int $renderSkippedFrames, int $renderTotalFrames, int $outputSkippedFrames, int $outputTotalFrames, int $webSocketSessionIncomingMessages, int $webSocketSessionOutgoingMessages)
    {
        $this->cpuUsage = $cpuUsage;
        $this->memoryUsage = $memoryUsage;
        $this->availableDiskSpace = $availableDiskSpace;
        $this->activeFps = $activeFps;
        $this->averageFrameRenderTime = $averageFrameRenderTime;
        $this->renderSkippedFrames = $renderSkippedFrames;
        $this->renderTotalFrames = $renderTotalFrames;
        $this->outputSkippedFrames = $outputSkippedFrames;
        $this->outputTotalFrames = $outputTotalFrames;
        $this->webSocketSessionIncomingMessages = $webSocketSessionIncomingMessages;
        $this->webSocketSessionOutgoingMessages = $webSocketSessionOutgoingMessages;
    }
}
