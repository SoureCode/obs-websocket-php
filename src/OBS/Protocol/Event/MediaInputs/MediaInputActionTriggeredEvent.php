<?php

namespace SoureCode\OBS\Protocol\Event\MediaInputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * An action has been performed on an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class MediaInputActionTriggeredEvent implements EventInterface
{
    /**
     * Name of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputName;
    /**
     * UUID of the input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputUuid;
    /**
     * Action performed on the input. See `ObsMediaInputAction` enum
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $mediaAction;
    public function __construct(string $inputName, string $inputUuid, string $mediaAction)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->mediaAction = $mediaAction;
    }
}