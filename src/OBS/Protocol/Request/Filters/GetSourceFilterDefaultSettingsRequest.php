<?php

namespace SoureCode\OBS\Protocol\Request\Filters;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the default settings for a filter kind.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category filters
 */
final readonly class GetSourceFilterDefaultSettingsRequest implements RequestInterface
{
    /**
     * Filter kind to get the default settings for
     *
     * @var string
     */
    public string $filterKind;
    public function __construct(string $filterKind)
    {
        $this->filterKind = $filterKind;
    }
}
