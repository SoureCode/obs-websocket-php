<?php

namespace SoureCode\OBS\Protocol\Enum;

enum WebSocketOpCode: int
{
    /**
     * The initial message sent by obs-websocket to newly connected clients.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Hello = 0;
    /**
     * The message sent by a newly connected client to obs-websocket in response to a `Hello`.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Identify = 1;
    /**
     * The response sent by obs-websocket to a client after it has successfully identified with obs-websocket.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Identified = 2;
    /**
     * The message sent by an already-identified client to update identification parameters.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Reidentify = 3;
    /**
     * The message sent by obs-websocket containing an event payload.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Event = 5;
    /**
     * The message sent by a client to obs-websocket to perform a request.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Request = 6;
    /**
     * The message sent by obs-websocket in response to a particular request from a client.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestResponse = 7;
    /**
     * The message sent by a client to obs-websocket to perform a batch of requests.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestBatch = 8;
    /**
     * The message sent by obs-websocket in response to a particular batch of requests from a client.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestBatchResponse = 9;
}
