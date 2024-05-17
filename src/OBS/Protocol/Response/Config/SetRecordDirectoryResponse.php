<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Sets the current directory that the record output writes files to.
 *
 * @since 5.3.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetRecordDirectoryResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}