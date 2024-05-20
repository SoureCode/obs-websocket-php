<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets an array of all of a source's filters.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterListRequest implements RequestInterface
{
    /**
     * Name of the source
     */
    public ?string $sourceName;
    /**
     * UUID of the source
     */
    public ?string $sourceUuid;

    public function __construct(?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}
