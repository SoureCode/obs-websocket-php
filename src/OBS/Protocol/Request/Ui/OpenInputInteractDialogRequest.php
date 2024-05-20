<?php

namespace SoureCode\OBS\Protocol\Request\Ui;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Opens the interact dialog of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category ui
 */
final readonly class OpenInputInteractDialogRequest implements RequestInterface
{
    /**
     * Name of the input to open the dialog of
     */
    public ?string $inputName;
    /**
     * UUID of the input to open the dialog of
     */
    public ?string $inputUuid;

    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
