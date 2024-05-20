<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * An source filter's settings have changed (been updated).
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 * @eventSubscription Filters
 */
final readonly class SourceFilterSettingsChangedEvent implements EventInterface
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
     * New settings object of the filter
     *
     * @var array
     */
    public array $filterSettings;
    /**
     * @param array $filterSettings
     */
    public function __construct(string $sourceName, string $filterName, array $filterSettings)
    {
        $this->sourceName = $sourceName;
        $this->filterName = $filterName;
        $this->filterSettings = $filterSettings;
    }
}
