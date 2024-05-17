<?php

namespace SoureCode\OBS\Protocol\Request\Record;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the status of the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category record
 */
final readonly class GetRecordStatusRequest implements RequestInterface
{
    public function __construct()
    {
    }
}