<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class CallVendorRequestResponse implements ResponseInterface
{
    /**
     * Echoed of `vendorName`
     *
     * @var string
     */
    public string $vendorName;
    /**
     * Echoed of `requestType`
     *
     * @var string
     */
    public string $requestType;
    /**
     * Object containing appropriate response data. {} if request does not provide any response data
     *
     * @var array
     */
    public array $responseData;
    /**
     * @param array $responseData
     */
    public function __construct(string $vendorName, string $requestType, array $responseData)
    {
        $this->vendorName = $vendorName;
        $this->requestType = $requestType;
        $this->responseData = $responseData;
    }
}
