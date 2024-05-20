<?php

namespace SoureCode\OBS\Protocol\Request\MediaInputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the cursor position of a media input.
 *
 * This request does not perform bounds checking of the cursor position.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class SetMediaInputCursorRequest implements RequestInterface
{
    /**
     * New cursor position to set
     *
     * @var int
     */
    public int $mediaCursor;
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

    public function __construct(int $mediaCursor, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->mediaCursor = $mediaCursor;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
