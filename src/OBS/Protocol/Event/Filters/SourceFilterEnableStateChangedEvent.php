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
 * @eventSubscription Filters
 */
final readonly class SourceFilterEnableStateChangedEvent implements EventInterface
{
    /**
     * Name of the source the filter is on
     *
     * @var string
     */
    public string $sourceName;
    /**
     * Name of the filter
     *
     * @var string
     */
    public string $filterName;
    /**
     * Whether the filter is enabled
     *
     * @var bool
     */
    public bool $filterEnabled;
    public function __construct(string $sourceName, string $filterName, bool $filterEnabled)
    {
        $this->sourceName = $sourceName;
        $this->filterName = $filterName;
        $this->filterEnabled = $filterEnabled;
    }
}
