<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the current directory that the record output is set to.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetRecordDirectoryRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
