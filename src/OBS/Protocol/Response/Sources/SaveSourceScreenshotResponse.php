<?php

namespace SoureCode\OBS\Protocol\Response\Sources;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Saves a screenshot of a source to the filesystem.
 * 
 * The `imageWidth` and `imageHeight` parameters are treated as "scale to inner", meaning the smallest ratio will be used and the aspect ratio of the original resolution is kept.
 * If `imageWidth` and `imageHeight` are not specified, the compressed image will use the full resolution of the source.
 * 
 * **Compatible with inputs and scenes.**
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category sources
 */
final readonly class SaveSourceScreenshotResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}