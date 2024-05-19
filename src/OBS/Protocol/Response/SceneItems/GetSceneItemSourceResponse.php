<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the source associated with a scene item.
 *
 * @since 5.4.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemSourceResponse implements ResponseInterface
{
    /**
     * Name of the source associated with the scene item
     *
     * @var string
     */
    public string $sourceName;
    /**
     * UUID of the source associated with the scene item
     *
     * @var string
     */
    public string $sourceUuid;
    public function __construct(string $sourceName, string $sourceUuid)
    {
        $this->sourceName = $sourceName;
        $this->sourceUuid = $sourceUuid;
    }
}
