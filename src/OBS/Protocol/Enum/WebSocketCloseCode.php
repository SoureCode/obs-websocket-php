<?php

namespace SoureCode\OBS\Protocol\Enum;

enum WebSocketCloseCode : int
{
    /**
     * For internal use only to tell the request handler not to perform any close action.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case DontClose = 0;
    /**
     * Unknown reason, should never be used.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnknownReason = 4000;
    /**
     * The server was unable to decode the incoming websocket message.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MessageDecodeError = 4002;
    /**
     * A data field is required but missing from the payload.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MissingDataField = 4003;
    /**
     * A data field's value type is invalid.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidDataFieldType = 4004;
    /**
     * A data field's value is invalid.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidDataFieldValue = 4005;
    /**
     * The specified `op` was invalid or missing.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnknownOpCode = 4006;
    /**
     * The client sent a websocket message without first sending `Identify` message.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case NotIdentified = 4007;
    /**
     * The client sent an `Identify` message while already identified.
     * 
     * Note: Once a client has identified, only `Reidentify` may be used to change session parameters.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case AlreadyIdentified = 4008;
    /**
     * The authentication attempt (via `Identify`) failed.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case AuthenticationFailed = 4009;
    /**
     * The server detected the usage of an old version of the obs-websocket RPC protocol.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnsupportedRpcVersion = 4010;
    /**
     * The websocket session has been invalidated by the obs-websocket server.
     * 
     * Note: This is the code used by the `Kick` button in the UI Session List. If you receive this code, you must not automatically reconnect.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case SessionInvalidated = 4011;
    /**
     * A requested feature is not supported due to hardware/software limitations.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnsupportedFeature = 4012;
}