<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the value of a "slot" from the selected persistent data realm.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetPersistentDataResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}