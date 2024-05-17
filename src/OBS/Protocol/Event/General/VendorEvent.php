<?php

namespace SoureCode\OBS\Protocol\Event\General;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * An event has been emitted from a vendor.
 * 
 * A vendor is a unique name registered by a third-party plugin or script, which allows for custom requests and events to be added to obs-websocket.
 * If a plugin or script implements vendor requests or events, documentation is expected to be provided with them.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category general
 */
final readonly class VendorEvent implements EventInterface
{
    /**
     * Name of the vendor emitting the event
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $vendorName;
    /**
     * Vendor-provided event typedef
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $eventType;
    /**
     * Vendor-provided event data. {} if event does not provide any data
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $eventData;
    public function __construct(string $vendorName, string $eventType, array $eventData)
    {
        $this->vendorName = $vendorName;
        $this->eventType = $eventType;
        $this->eventData = $eventData;
    }
}