<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the value of a "slot" from the selected persistent data realm.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetPersistentDataRequest implements RequestInterface
{
    /**
     * The data realm to select. `OBS_WEBSOCKET_DATA_REALM_GLOBAL` or `OBS_WEBSOCKET_DATA_REALM_PROFILE`
     */
    public string $realm;
    /**
     * The name of the slot to retrieve data from
     */
    public string $slotName;

    public function __construct(string $realm, string $slotName)
    {
        $this->realm = $realm;
        $this->slotName = $slotName;
    }
}
