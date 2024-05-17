<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sleeps for a time duration or number of frames. Only available in request batches with types `SERIAL_REALTIME` or `SERIAL_FRAME`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category general
 */
final readonly class SleepResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}