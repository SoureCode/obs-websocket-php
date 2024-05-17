<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the info for a specific source filter.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterResponse implements ResponseInterface
{
    /**
     * Whether the filter is enabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $filterEnabled;
    /**
     * Index of the filter in the list, beginning at 0
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $filterIndex;
    /**
     * The kind of filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $filterKind;
    /**
     * Settings object associated with the filter
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array
     */
    public array $filterSettings;
    public function __construct(bool $filterEnabled, int $filterIndex, string $filterKind, array $filterSettings)
    {
        $this->filterEnabled = $filterEnabled;
        $this->filterIndex = $filterIndex;
        $this->filterKind = $filterKind;
        $this->filterSettings = $filterSettings;
    }
}