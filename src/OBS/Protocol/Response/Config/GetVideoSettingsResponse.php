<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the current video settings.
 *
 * Note: To get the true FPS value, divide the FPS numerator by the FPS denominator. Example: `60000/1001`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetVideoSettingsResponse implements ResponseInterface
{
    /**
     * Numerator of the fractional FPS value
     *
     * @var int
     */
    public int $fpsNumerator;
    /**
     * Denominator of the fractional FPS value
     *
     * @var int
     */
    public int $fpsDenominator;
    /**
     * Width of the base (canvas) resolution in pixels
     *
     * @var int
     */
    public int $baseWidth;
    /**
     * Height of the base (canvas) resolution in pixels
     *
     * @var int
     */
    public int $baseHeight;
    /**
     * Width of the output resolution in pixels
     *
     * @var int
     */
    public int $outputWidth;
    /**
     * Height of the output resolution in pixels
     *
     * @var int
     */
    public int $outputHeight;

    public function __construct(int $fpsNumerator, int $fpsDenominator, int $baseWidth, int $baseHeight, int $outputWidth, int $outputHeight)
    {
        $this->fpsNumerator = $fpsNumerator;
        $this->fpsDenominator = $fpsDenominator;
        $this->baseWidth = $baseWidth;
        $this->baseHeight = $baseHeight;
        $this->outputWidth = $outputWidth;
        $this->outputHeight = $outputHeight;
    }
}
