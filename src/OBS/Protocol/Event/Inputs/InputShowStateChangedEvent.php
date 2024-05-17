<?php

namespace SoureCode\OBS\Protocol\Event\Inputs;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * An input's show state has changed.
 * 
 * When an input is showing, it means it's being shown by the preview or a dialog.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class InputShowStateChangedEvent implements EventInterface
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
     * Whether the input is showing
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $videoShowing;
    public function __construct(string $inputName, string $inputUuid, bool $videoShowing)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->videoShowing = $videoShowing;
    }
}