<?php

namespace SoureCode\OBS\Protocol\Request\Sources;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the active and show state of a source.
 * 
 * **Compatible with inputs and scenes.**
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category sources
 */
final readonly class GetSourceActiveRequest implements RequestInterface
{
    /**
     * Name of the source to get the active state of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceName;
    /**
     * UUID of the source to get the active state of
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sourceUuid;
    public function __construct(?string $sourceName = null, ?string $sourceUuid = null)
    {
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}