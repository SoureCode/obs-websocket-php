<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Opens a projector for a specific output video mix.
 * 
 * Mix types:
 * 
 * - `OBS_WEBSOCKET_VIDEO_MIX_TYPE_PREVIEW`
 * - `OBS_WEBSOCKET_VIDEO_MIX_TYPE_PROGRAM`
 * - `OBS_WEBSOCKET_VIDEO_MIX_TYPE_MULTIVIEW`
 * 
 * Note: This request serves to provide feature parity with 4.x. It is very likely to be changed/deprecated in a future release.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category ui
 */
final readonly class OpenVideoMixProjectorResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}