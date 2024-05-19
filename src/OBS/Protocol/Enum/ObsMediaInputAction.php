<?php

namespace SoureCode\OBS\Protocol\Enum;

enum ObsMediaInputAction: string
{
    /**
     * No action.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_NONE = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_NONE';
    /**
     * Play the media input.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PLAY = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PLAY';
    /**
     * Pause the media input.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PAUSE = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PAUSE';
    /**
     * Stop the media input.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_STOP = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_STOP';
    /**
     * Restart the media input.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_RESTART = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_RESTART';
    /**
     * Go to the next playlist item.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_NEXT = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_NEXT';
    /**
     * Go to the previous playlist item.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    #[Deprecated]
    case OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PREVIOUS = 'OBS_WEBSOCKET_MEDIA_INPUT_ACTION_PREVIOUS';
}
