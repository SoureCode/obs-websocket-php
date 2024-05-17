<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the info for a specific source filter.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterRequest implements RequestInterface
{
    /**
     * Name of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterName;
    /**
     * Name of the source
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceName;
    /**
     * UUID of the source
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceUuid;
    public function __construct(string $filterName, ?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->filterName = $filterName;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}