<?php

namespace SoureCode\OBS\Protocol\Response\MediaInputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the status of a media input.
 * 
 * Media States:
 * 
 * - `OBS_MEDIA_STATE_NONE`
 * - `OBS_MEDIA_STATE_PLAYING`
 * - `OBS_MEDIA_STATE_OPENING`
 * - `OBS_MEDIA_STATE_BUFFERING`
 * - `OBS_MEDIA_STATE_PAUSED`
 * - `OBS_MEDIA_STATE_STOPPED`
 * - `OBS_MEDIA_STATE_ENDED`
 * - `OBS_MEDIA_STATE_ERROR`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class GetMediaInputStatusResponse implements ResponseInterface
{
    /**
     * State of the media input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $mediaState;
    /**
     * Total duration of the playing media in milliseconds. `null` if not playing
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var ?int
     */
    public ?int $mediaDuration;
    /**
     * Position of the cursor in milliseconds. `null` if not playing
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var ?int
     */
    public ?int $mediaCursor;
    public function __construct(string $mediaState, ?int $mediaDuration = null, ?int $mediaCursor = null)
    {
        $this->mediaState = $mediaState;
        $this->mediaDuration = $mediaDuration;
        $this->mediaCursor = $mediaCursor;
    }
}