<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sleeps for a time duration or number of frames. Only available in request batches with types `SERIAL_REALTIME` or `SERIAL_FRAME`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category general
 */
final readonly class SleepRequest implements RequestInterface
{
    /**
     * Number of milliseconds to sleep for (if `SERIAL_REALTIME` mode)
     *
     * @var ?int
     */
    public ?int $sleepMillis;
    /**
     * Number of frames to sleep for (if `SERIAL_FRAME` mode)
     *
     * @var ?int
     */
    public ?int $sleepFrames;

    public function __construct(?int $sleepMillis = null, ?int $sleepFrames = null)
    {
        $this->sleepMillis = $sleepMillis;
        $this->sleepFrames = $sleepFrames;
    }
}
