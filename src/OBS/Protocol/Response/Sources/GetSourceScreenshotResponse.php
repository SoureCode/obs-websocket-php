<?php

namespace SoureCode\OBS\Protocol\Response\Sources;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets a Base64-encoded screenshot of a source.
 * 
 * The `imageWidth` and `imageHeight` parameters are treated as "scale to inner", meaning the smallest ratio will be used and the aspect ratio of the original resolution is kept.
 * If `imageWidth` and `imageHeight` are not specified, the compressed image will use the full resolution of the source.
 * 
 * **Compatible with inputs and scenes.**
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category sources
 */
final readonly class GetSourceScreenshotResponse implements ResponseInterface
{
    /**
     * Base64-encoded screenshot
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $imageData;
    public function __construct(string $imageData)
    {
        $this->imageData = $imageData;
    }
}