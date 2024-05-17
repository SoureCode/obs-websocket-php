<?php

namespace SoureCode\OBS\Protocol\Event\Filters;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A filter has been added to a source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class SourceFilterCreatedEvent implements EventInterface
{
    /**
     * Name of the source the filter was added to
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
     * The kind of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterKind;
    /**
     * Index position of the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $filterIndex;
    /**
     * The settings configured to the filter when it was created
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $filterSettings;
    /**
     * The default settings for the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public array $defaultFilterSettings;
    public function __construct(string $sourceName, string $filterName, string $filterKind, int $filterIndex, array $filterSettings, array $defaultFilterSettings)
    {
        $this->sourceName = $sourceName;
        $this->filterName = $filterName;
        $this->filterKind = $filterKind;
        $this->filterIndex = $filterIndex;
        $this->filterSettings = $filterSettings;
        $this->defaultFilterSettings = $defaultFilterSettings;
    }
}