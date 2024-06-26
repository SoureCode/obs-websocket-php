<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the index position of a filter on a source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SetSourceFilterIndexRequest implements RequestInterface
{
    /**
     * Name of the filter
     */
    public string $filterName;
    /**
     * New index position of the filter
     */
    public int $filterIndex;
    /**
     * Name of the source the filter is on
     */
    public ?string $sourceName;
    /**
     * UUID of the source the filter is on
     */
    public ?string $sourceUuid;

    public function __construct(string $filterName, int $filterIndex, ?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->filterName = $filterName;
        $this->filterIndex = $filterIndex;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}
