<?php

namespace SoureCode\OBS\Protocol\Enum;

enum RequestStatus : int
{
    /**
     * Unknown status, should never be used.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Unknown = 0;
    /**
     * For internal use to signify a successful field check.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case NoError = 10;
    /**
     * The request has succeeded.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Success = 100;
    /**
     * The `requestType` field is missing from the request data.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MissingRequestType = 203;
    /**
     * The request type is invalid or does not exist.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnknownRequestType = 204;
    /**
     * Generic error code.
     * 
     * Note: A comment is required to be provided by obs-websocket.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case GenericError = 205;
    /**
     * The request batch execution type is not supported.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case UnsupportedRequestBatchExecutionType = 206;
    /**
     * The server is not ready to handle the request.
     * 
     * Note: This usually occurs during OBS scene collection change or exit. Requests may be tried again after a delay if this code is given.
     *
     * @since 5.3.0
     * @rpcVersion 1
     */
    case NotReady = 207;
    /**
     * A required request field is missing.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MissingRequestField = 300;
    /**
     * The request does not have a valid requestData object.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MissingRequestData = 301;
    /**
     * Generic invalid request field message.
     * 
     * Note: A comment is required to be provided by obs-websocket.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidRequestField = 400;
    /**
     * A request field has the wrong data type.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidRequestFieldType = 401;
    /**
     * A request field (number) is outside of the allowed range.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestFieldOutOfRange = 402;
    /**
     * A request field (string or array) is empty and cannot be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestFieldEmpty = 403;
    /**
     * There are too many request fields (eg. a request takes two optionals, where only one is allowed at a time).
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case TooManyRequestFields = 404;
    /**
     * An output is running and cannot be in order to perform the request.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case OutputRunning = 500;
    /**
     * An output is not running and should be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case OutputNotRunning = 501;
    /**
     * An output is paused and should not be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case OutputPaused = 502;
    /**
     * An output is not paused and should be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case OutputNotPaused = 503;
    /**
     * An output is disabled and should not be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case OutputDisabled = 504;
    /**
     * Studio mode is active and cannot be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case StudioModeActive = 505;
    /**
     * Studio mode is not active and should be.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case StudioModeNotActive = 506;
    /**
     * The resource was not found.
     * 
     * Note: Resources are any kind of object in obs-websocket, like inputs, profiles, outputs, etc.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case ResourceNotFound = 600;
    /**
     * The resource already exists.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case ResourceAlreadyExists = 601;
    /**
     * The type of resource found is invalid.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidResourceType = 602;
    /**
     * There are not enough instances of the resource in order to perform the request.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case NotEnoughResources = 603;
    /**
     * The state of the resource is invalid. For example, if the resource is blocked from being accessed.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidResourceState = 604;
    /**
     * The specified input (obs_source_t-OBS_SOURCE_TYPE_INPUT) had the wrong kind.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidInputKind = 605;
    /**
     * The resource does not support being configured.
     * 
     * This is particularly relevant to transitions, where they do not always have changeable settings.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case ResourceNotConfigurable = 606;
    /**
     * The specified filter (obs_source_t-OBS_SOURCE_TYPE_FILTER) had the wrong kind.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InvalidFilterKind = 607;
    /**
     * Creating the resource failed.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case ResourceCreationFailed = 700;
    /**
     * Performing an action on the resource failed.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case ResourceActionFailed = 701;
    /**
     * Processing the request failed unexpectedly.
     * 
     * Note: A comment is required to be provided by obs-websocket.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case RequestProcessingFailed = 702;
    /**
     * The combination of request fields cannot be used to perform an action.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case CannotAct = 703;
}