<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A filter has been removed from a source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 * @eventSubscription Filters
 */
final readonly class SourceFilterRemovedEvent implements EventInterface
{
    /**
     * Name of the source the filter was on
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

    public function __construct(string $sourceName, string $filterName)
    {
        $this->sourceName = $sourceName;
        $this->filterName = $filterName;
    }
}
