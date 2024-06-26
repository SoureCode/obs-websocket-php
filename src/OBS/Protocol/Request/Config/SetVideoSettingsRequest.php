<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the current video settings.
 *
 * Note: Fields must be specified in pairs. For example, you cannot set only `baseWidth` without needing to specify `baseHeight`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetVideoSettingsRequest implements RequestInterface
{
    /**
     * Numerator of the fractional FPS value
     */
    public ?int $fpsNumerator;
    /**
     * Denominator of the fractional FPS value
     */
    public ?int $fpsDenominator;
    /**
     * Width of the base (canvas) resolution in pixels
     */
    public ?int $baseWidth;
    /**
     * Height of the base (canvas) resolution in pixels
     */
    public ?int $baseHeight;
    /**
     * Width of the output resolution in pixels
     */
    public ?int $outputWidth;
    /**
     * Height of the output resolution in pixels
     */
    public ?int $outputHeight;

    public function __construct(?int $fpsNumerator = null, ?int $fpsDenominator = null, ?int $baseWidth = null, ?int $baseHeight = null, ?int $outputWidth = null, ?int $outputHeight = null)
    {
        $this->fpsNumerator = $fpsNumerator;
        $this->fpsDenominator = $fpsDenominator;
        $this->baseWidth = $baseWidth;
        $this->baseHeight = $baseHeight;
        $this->outputWidth = $outputWidth;
        $this->outputHeight = $outputHeight;
    }
}
