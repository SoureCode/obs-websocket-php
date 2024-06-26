<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets data about the current plugin and RPC version.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category general
 */
final readonly class GetVersionResponse implements ResponseInterface
{
    /**
     * Current OBS Studio version
     */
    public string $obsVersion;
    /**
     * Current obs-websocket version
     */
    public string $obsWebSocketVersion;
    /**
     * Current latest obs-websocket RPC version
     */
    public int $rpcVersion;
    /**
     * Array of available RPC requests for the currently negotiated RPC version
     *
     * @var array<string>
     */
    public array $availableRequests;
    /**
     * Image formats available in `GetSourceScreenshot` and `SaveSourceScreenshot` requests.
     *
     * @var array<string>
     */
    public array $supportedImageFormats;
    /**
     * Name of the platform. Usually `windows`, `macos`, or `ubuntu` (linux flavor). Not guaranteed to be any of those
     */
    public string $platform;
    /**
     * Description of the platform, like `Windows 10 (10.0)`
     */
    public string $platformDescription;
    /**
     * @param array<string> $availableRequests
     * @param array<string> $supportedImageFormats
     */
    public function __construct(string $obsVersion, string $obsWebSocketVersion, int $rpcVersion, array $availableRequests, array $supportedImageFormats, string $platform, string $platformDescription)
    {
        $this->obsVersion = $obsVersion;
        $this->obsWebSocketVersion = $obsWebSocketVersion;
        $this->rpcVersion = $rpcVersion;
        $this->availableRequests = $availableRequests;
        $this->supportedImageFormats = $supportedImageFormats;
        $this->platform = $platform;
        $this->platformDescription = $platformDescription;
    }
}
