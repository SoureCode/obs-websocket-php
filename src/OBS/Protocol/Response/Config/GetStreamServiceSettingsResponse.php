<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the current stream service settings (stream destination).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class GetStreamServiceSettingsResponse implements ResponseInterface
{
    /**
     * Stream service type, like `rtmp_custom` or `rtmp_common`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $streamServiceType;
    /**
     * Stream service settings
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array
     */
    public array $streamServiceSettings;
    public function __construct(string $streamServiceType, array $streamServiceSettings)
    {
        $this->streamServiceType = $streamServiceType;
        $this->streamServiceSettings = $streamServiceSettings;
    }
}