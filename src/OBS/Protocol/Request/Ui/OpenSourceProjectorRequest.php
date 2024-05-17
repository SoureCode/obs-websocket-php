<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Opens a projector for a source.
 * 
 * Note: This request serves to provide feature parity with 4.x. It is very likely to be changed/deprecated in a future release.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category ui
 */
final readonly class OpenSourceProjectorRequest implements RequestInterface
{
    /**
     * Name of the source to open a projector for
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceName;
    /**
     * UUID of the source to open a projector for
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceUuid;
    /**
     * Monitor index, use `GetMonitorList` to obtain index
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public ?int $monitorIndex;
    /**
     * Size/Position data for a windowed projector, in Qt Base64 encoded format. Mutually exclusive with `monitorIndex`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $projectorGeometry;
    public function __construct(?string $sourceName = null, ?string $sourceUuid = null, ?int $monitorIndex = null, ?string $projectorGeometry = null)
    {
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->monitorIndex = $monitorIndex;
        $this->projectorGeometry = $projectorGeometry;
    }
}