<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the current directory that the record output writes files to.
 *
 * @since 5.3.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class SetRecordDirectoryRequest implements RequestInterface
{
    /**
     * Output directory
     *
     * @var string
     */
    public string $recordDirectory;
    public function __construct(string $recordDirectory)
    {
        $this->recordDirectory = $recordDirectory;
    }
}
