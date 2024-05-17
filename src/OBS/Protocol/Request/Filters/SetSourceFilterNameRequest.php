<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the name of a source filter (rename).
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class SetSourceFilterNameRequest implements RequestInterface
{
    /**
     * Current name of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterName;
    /**
     * New name for the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $newFilterName;
    /**
     * Name of the source the filter is on
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceName;
    /**
     * UUID of the source the filter is on
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceUuid;
    public function __construct(string $filterName, string $newFilterName, ?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->filterName = $filterName;
        $this->newFilterName = $newFilterName;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}