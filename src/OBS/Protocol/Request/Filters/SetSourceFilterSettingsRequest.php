<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the settings of a source filter.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class SetSourceFilterSettingsRequest implements RequestInterface
{
    /**
     * Name of the filter to set the settings of
     */
    public string $filterName;
    /**
     * Object of settings to apply
     *
     * @var array
     */
    public array $filterSettings;
    /**
     * Name of the source the filter is on
     */
    public ?string $sourceName;
    /**
     * UUID of the source the filter is on
     */
    public ?string $sourceUuid;
    /**
     * True == apply the settings on top of existing ones, False == reset the input to its defaults, then apply settings.
     */
    public ?bool $overlay;
    /**
     * @param array $filterSettings
     */
    public function __construct(string $filterName, array $filterSettings, ?string $sourceName = null, ?string $sourceUuid = null, ?bool $overlay = null)
    {
        $this->filterName = $filterName;
        $this->filterSettings = $filterSettings;
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
        $this->overlay = $overlay;
    }
}
