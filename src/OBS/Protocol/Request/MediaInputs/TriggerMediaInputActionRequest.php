<?php

namespace SoureCode\OBS\Protocol\Request\MediaInputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Triggers an action on a media input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class TriggerMediaInputActionRequest implements RequestInterface
{
    /**
     * Identifier of the `ObsMediaInputAction` enum
     *
     * @var string
     */
    public string $mediaAction;
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

    public function __construct(string $mediaAction, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->mediaAction = $mediaAction;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
