<?php

namespace SoureCode\OBS\Protocol\Enum;

use JetBrains\PhpStorm\Deprecated;
#[Deprecated]
enum ObsOutputState : string
{
    /**
     * Unknown state.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_UNKNOWN = 'OBS_WEBSOCKET_OUTPUT_UNKNOWN';
    /**
     * The output is starting.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_STARTING = 'OBS_WEBSOCKET_OUTPUT_STARTING';
    /**
     * The input has started.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_STARTED = 'OBS_WEBSOCKET_OUTPUT_STARTED';
    /**
     * The output is stopping.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_STOPPING = 'OBS_WEBSOCKET_OUTPUT_STOPPING';
    /**
     * The output has stopped.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_STOPPED = 'OBS_WEBSOCKET_OUTPUT_STOPPED';
    /**
     * The output has disconnected and is reconnecting.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_RECONNECTING = 'OBS_WEBSOCKET_OUTPUT_RECONNECTING';
    /**
     * The output has reconnected successfully.
     *
     * @since 5.1.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_RECONNECTED = 'OBS_WEBSOCKET_OUTPUT_RECONNECTED';
    /**
     * The output is now paused.
     *
     * @since 5.1.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_PAUSED = 'OBS_WEBSOCKET_OUTPUT_PAUSED';
    /**
     * The output has been resumed (unpaused).
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_OUTPUT_RESUMED = 'OBS_WEBSOCKET_OUTPUT_RESUMED';
}