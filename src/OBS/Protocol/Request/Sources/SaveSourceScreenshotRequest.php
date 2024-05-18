<?php

namespace SoureCode\OBS\Protocol\Request\Sources;

use SoureCode\OBS\Protocol\RequestInterface;
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
final readonly class SaveSourceScreenshotRequest implements RequestInterface
{
    /**
     * Image compression format to use. Use `GetVersion` to get compatible image formats
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $imageFormat;
    /**
     * Path to save the screenshot file to. Eg. `C:\Users\user\Desktop\screenshot.png`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $imageFilePath;
    /**
     * Name of the source to take a screenshot of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sourceName;
    /**
     * UUID of the source to take a screenshot of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sourceUuid;
    /**
     * Width to scale the screenshot to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?int
     */
    public ?int $imageWidth;
    /**
     * Height to scale the screenshot to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?int
     */
    public ?int $imageHeight;
    /**
     * Compression quality to use. 0 for high compression, 100 for uncompressed. -1 to use "default" (whatever that means, idk)
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?int
     */
    public ?int $imageCompressionQuality;
    public function __construct(string $imageFormat, string $imageFilePath, ?string $sourceName = null, ?string $sourceUuid = null, ?int $imageWidth = null, ?int $imageHeight = null, ?int $imageCompressionQuality = null)
    {
        $this->imageFormat = $imageFormat;
        $this->imageFilePath = $imageFilePath;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->imageWidth = $imageWidth;
        $this->imageHeight = $imageHeight;
        $this->imageCompressionQuality = $imageCompressionQuality;
    }
}