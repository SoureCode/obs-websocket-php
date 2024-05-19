<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the default settings for a filter kind.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class GetSourceFilterDefaultSettingsResponse implements ResponseInterface
{
    /**
     * Object of default settings for the filter kind
     *
     * @var array
     */
    public array $defaultFilterSettings;
    public function __construct(array $defaultFilterSettings)
    {
        $this->defaultFilterSettings = $defaultFilterSettings;
    }
}
