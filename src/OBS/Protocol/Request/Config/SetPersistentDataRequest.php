<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the value of a "slot" from the selected persistent data realm.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetPersistentDataRequest implements RequestInterface
{
    /**
     * The data realm to select. `OBS_WEBSOCKET_DATA_REALM_GLOBAL` or `OBS_WEBSOCKET_DATA_REALM_PROFILE`
     *
     * @var string
     */
    public string $realm;
    /**
     * The name of the slot to retrieve data from
     *
     * @var string
     */
    public string $slotName;
    /**
     * The value to apply to the slot
     *
     * @var mixed
     */
    public mixed $slotValue;
    /**
     * @param mixed $slotValue
     */
    public function __construct(string $realm, string $slotName, mixed $slotValue)
    {
        $this->realm = $realm;
        $this->slotName = $slotName;
        $this->slotValue = $slotValue;
    }
}
