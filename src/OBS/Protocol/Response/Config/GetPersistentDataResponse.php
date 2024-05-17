<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the value of a "slot" from the selected persistent data realm.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetPersistentDataResponse implements ResponseInterface
{
    /**
     * Value associated with the slot. `null` if not set
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var mixed
     */
    public mixed $slotValue;
    public function __construct(mixed $slotValue)
    {
        $this->slotValue = $slotValue;
    }
}