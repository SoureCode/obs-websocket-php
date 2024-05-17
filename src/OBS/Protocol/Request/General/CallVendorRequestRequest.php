<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Call a request registered to a vendor.
 * 
 * A vendor is a unique name registered by a third-party plugin or script, which allows for custom requests and events to be added to obs-websocket.
 * If a plugin or script implements vendor requests or events, documentation is expected to be provided with them.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category general
 */
final readonly class CallVendorRequestRequest implements RequestInterface
{
    /**
     * Name of the vendor to use
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $vendorName;
    /**
     * The request type to call
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $requestType;
    /**
     * Object containing appropriate request data
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public ?array $requestData;
    public function __construct(string $vendorName, string $requestType, ?array $requestData = null)
    {
        $this->vendorName = $vendorName;
        $this->requestType = $requestType;
        $this->requestData = $requestData;
    }
}