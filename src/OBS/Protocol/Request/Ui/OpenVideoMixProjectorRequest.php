<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class OpenVideoMixProjectorRequest implements RequestInterface
{
    /**
     * Type of mix to open
     *
     * @var string
     */
    public string $videoMixType;
    /**
     * Monitor index, use `GetMonitorList` to obtain index
     *
     * @var ?int
     */
    public ?int $monitorIndex;
    /**
     * Size/Position data for a windowed projector, in Qt Base64 encoded format. Mutually exclusive with `monitorIndex`
     *
     * @var ?string
     */
    public ?string $projectorGeometry;

    public function __construct(string $videoMixType, ?int $monitorIndex = null, ?string $projectorGeometry = null)
    {
        $this->videoMixType = $videoMixType;
        $this->monitorIndex = $monitorIndex;
        $this->projectorGeometry = $projectorGeometry;
    }
}
