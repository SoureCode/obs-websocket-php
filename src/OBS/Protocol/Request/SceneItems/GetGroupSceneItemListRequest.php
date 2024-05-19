<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

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
final readonly class GetGroupSceneItemListRequest implements RequestInterface
{
    /**
     * Name of the group to get the items of
     *
     * @var ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the group to get the items of
     *
     * @var ?string
     */
    public ?string $sceneUuid;
    public function __construct(?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
