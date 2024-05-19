<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the enable state of a source filter.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SetSourceFilterEnabledRequest implements RequestInterface
{
    /**
     * Name of the filter
     *
     * @var string
     */
    public string $filterName;
    /**
     * New enable state of the filter
     *
     * @var bool
     */
    public bool $filterEnabled;
    /**
     * Name of the source the filter is on
     *
     * @var ?string
     */
    public ?string $sourceName;
    /**
     * UUID of the source the filter is on
     *
     * @var ?string
     */
    public ?string $sourceUuid;
    public function __construct(string $filterName, bool $filterEnabled, ?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->filterName = $filterName;
        $this->filterEnabled = $filterEnabled;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}
