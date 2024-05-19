<?php

namespace SoureCode\OBS\Protocol\Enum;

enum RequestBatchExecutionType: int
{
    /**
     * Not a request batch.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case None = -1;
    /**
     * A request batch which processes all requests serially, as fast as possible.
     *
     * Note: To introduce artificial delay, use the `Sleep` request and the `sleepMillis` request field.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case SerialRealtime = 0;
    /**
     * A request batch type which processes all requests serially, in sync with the graphics thread. Designed to provide high accuracy for animations.
     *
     * Note: To introduce artificial delay, use the `Sleep` request and the `sleepFrames` request field.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case SerialFrame = 1;
    /**
     * A request batch type which processes all requests using all available threads in the thread pool.
     *
     * Note: This is mainly experimental, and only really shows its colors during requests which require lots of
     * active processing, like `GetSourceScreenshot`.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Parallel = 2;
}
