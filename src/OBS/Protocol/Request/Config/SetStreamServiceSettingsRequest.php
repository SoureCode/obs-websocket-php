<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the current stream service settings (stream destination).
 * 
 * Note: Simple RTMP settings can be set with type `rtmp_custom` and the settings fields `server` and `key`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class SetStreamServiceSettingsRequest implements RequestInterface
{
    /**
     * Type of stream service to apply. Example: `rtmp_common` or `rtmp_custom`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $streamServiceType;
    /**
     * Settings to apply to the service
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $streamServiceSettings;
    public function __construct(string $streamServiceType, array $streamServiceSettings)
    {
        $this->streamServiceType = $streamServiceType;
        $this->streamServiceSettings = $streamServiceSettings;
    }
}