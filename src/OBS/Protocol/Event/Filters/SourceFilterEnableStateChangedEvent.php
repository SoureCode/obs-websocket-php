<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A source filter's enable state has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SourceFilterEnableStateChangedEvent implements EventInterface
{
    /**
     * Name of the source the filter is on
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $sourceName;
    /**
     * Name of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterName;
    /**
     * Whether the filter is enabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public bool $filterEnabled;
    public function __construct(string $sourceName, string $filterName, bool $filterEnabled)
    {
        $this->sourceName = $sourceName;
        $this->filterName = $filterName;
        $this->filterEnabled = $filterEnabled;
    }
}