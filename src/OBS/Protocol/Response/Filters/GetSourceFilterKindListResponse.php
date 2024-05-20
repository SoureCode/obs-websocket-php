<?php

namespace SoureCode\OBS\Protocol\Response\Filters;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all available source filter kinds.
 *
 * Similar to `GetInputKindList`
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 2
 * @category filters
 */
final readonly class GetSourceFilterKindListResponse implements ResponseInterface
{
    /**
     * Array of source filter kinds
     *
     * @var array<string>
     */
    public array $sourceFilterKinds;
    /**
     * @param array<string> $sourceFilterKinds
     */
    public function __construct(array $sourceFilterKinds)
    {
        $this->sourceFilterKinds = $sourceFilterKinds;
    }
}
