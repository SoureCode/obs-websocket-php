<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the current directory that the record output is set to.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category config
 */
final readonly class GetRecordDirectoryResponse implements ResponseInterface
{
    /**
     * Output directory
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $recordDirectory;
    public function __construct(string $recordDirectory)
    {
        $this->recordDirectory = $recordDirectory;
    }
}