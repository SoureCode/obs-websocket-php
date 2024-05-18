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
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterName;
    /**
     * The kind of filter to be created
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $filterKind;
    /**
     * Name of the source to add the filter to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sourceName;
    /**
     * UUID of the source to add the filter to
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $sourceUuid;
    /**
     * Settings object to initialize the filter with
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?array
     */
    public ?array $filterSettings;
    public function __construct(string $filterName, string $filterKind, ?string $sourceName = null, ?string $sourceUuid = null, ?array $filterSettings = null)
    {
        $this->filterName = $filterName;
        $this->filterKind = $filterKind;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->filterSettings = $filterSettings;
    }
}