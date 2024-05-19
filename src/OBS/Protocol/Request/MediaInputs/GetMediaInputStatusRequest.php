<?php

namespace SoureCode\OBS\Protocol\Request\MediaInputs;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class GetMediaInputStatusRequest implements RequestInterface
{
    /**
     * Name of the media input
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the media input
     *
     * @var ?string
     */
    public ?string $inputUuid;
    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
