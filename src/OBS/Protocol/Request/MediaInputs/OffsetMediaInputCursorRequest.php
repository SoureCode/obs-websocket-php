<?php

namespace SoureCode\OBS\Protocol\Request\MediaInputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Offsets the current cursor position of a media input by the specified value.
 *
 * This request does not perform bounds checking of the cursor position.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category media inputs
 */
final readonly class OffsetMediaInputCursorRequest implements RequestInterface
{
    /**
     * Value to offset the current cursor position by
     *
     * @var int
     */
    public int $mediaCursorOffset;
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
    public function __construct(int $mediaCursorOffset, ?string $inputName = null, ?string $inputUuid = null)
    {
        $this->mediaCursorOffset = $mediaCursorOffset;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
