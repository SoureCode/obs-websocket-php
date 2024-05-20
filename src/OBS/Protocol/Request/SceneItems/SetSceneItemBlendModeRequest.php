<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the blend mode of a scene item.
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scene items
 */
final readonly class SetSceneItemBlendModeRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     */
    public int $sceneItemId;
    /**
     * New blend mode
     */
    public string $sceneItemBlendMode;
    /**
     * Name of the scene the item is in
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     */
    public ?string $sceneUuid;

    public function __construct(int $sceneItemId, string $sceneItemBlendMode, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneItemBlendMode = $sceneItemBlendMode;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
