<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Basically GetSceneItemList, but for groups.
 *
 * Using groups at all in OBS is discouraged, as they are very broken under the hood. Please use nested scenes instead.
 *
 * Groups only
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetGroupSceneItemListResponse implements ResponseInterface
{
    /**
     * Array of scene items in the group
     *
     * @var array<object>
     */
    public array $sceneItems;
    public function __construct(array $sceneItems)
    {
        $this->sceneItems = $sceneItems;
    }
}
