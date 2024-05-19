<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * A source's filter list has been reindexed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 * @eventSubscription Filters
 */
final readonly class SourceFilterListReindexedEvent implements EventInterface
{
    /**
     * Name of the source
     *
     * @var string
     */
    public string $sourceName;
    /**
     * Array of filter objects
     *
     * @var array<object>
     */
    public array $filters;
    public function __construct(string $sourceName, array $filters)
    {
        $this->sourceName = $sourceName;
        $this->filters = $filters;
    }
}
