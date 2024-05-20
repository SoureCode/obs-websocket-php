<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Creates a new filter, adding it to the specified source.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class CreateSourceFilterRequest implements RequestInterface
{
    /**
     * Name of the new filter to be created
     */
    public string $filterName;
    /**
     * The kind of filter to be created
     */
    public string $filterKind;
    /**
     * Name of the source to add the filter to
     */
    public ?string $sourceName;
    /**
     * UUID of the source to add the filter to
     */
    public ?string $sourceUuid;
    /**
     * Settings object to initialize the filter with
     *
     * @var array
     */
    public ?array $filterSettings;
    /**
     * @param ?array $filterSettings
     */
    public function __construct(string $filterName, string $filterKind, ?string $sourceName = null, ?string $sourceUuid = null, ?array $filterSettings = null)
    {
        $this->filterName = $filterName;
        $this->filterKind = $filterKind;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->filterSettings = $filterSettings;
    }
}
