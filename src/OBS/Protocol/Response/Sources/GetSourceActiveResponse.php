<?php

namespace SoureCode\OBS\Protocol\Response\Sources;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the active and show state of a source.
 *
 * **Compatible with inputs and scenes.**
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category sources
 */
final readonly class GetSourceActiveResponse implements ResponseInterface
{
    /**
     * Whether the source is showing in Program
     *
     * @var bool
     */
    public bool $videoActive;
    /**
     * Whether the source is showing in the UI (Preview, Projector, Properties)
     *
     * @var bool
     */
    public bool $videoShowing;
    public function __construct(bool $videoActive, bool $videoShowing)
    {
        $this->videoActive = $videoActive;
        $this->videoShowing = $videoShowing;
    }
}
