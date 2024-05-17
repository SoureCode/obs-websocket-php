<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The name of a source filter has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class SourceFilterNameChangedEvent implements EventInterface
{
    /**
     * The source the filter is on
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sourceName;
    /**
     * Old name of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $oldFilterName;
    /**
     * New name of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterName;
    public function __construct(string $sourceName, string $oldFilterName, string $filterName)
    {
        $this->sourceName = $sourceName;
        $this->oldFilterName = $oldFilterName;
        $this->filterName = $filterName;
    }
}