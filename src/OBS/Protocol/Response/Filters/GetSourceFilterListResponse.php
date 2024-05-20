<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all of a source's filters.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterListResponse implements ResponseInterface
{
    /**
     * Array of filters
     *
     * @var array<object>
     */
    public array $filters;
    /**
     * @param array<object> $filters
     */
    public function __construct(array $filters)
    {
        $this->filters = $filters;
    }
}
