<?php

namespace SoureCode\OBS\Protocol\Request\SceneItems;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the blend mode of a scene item.
 *
 * Blend modes:
 *
 * - `OBS_BLEND_NORMAL`
 * - `OBS_BLEND_ADDITIVE`
 * - `OBS_BLEND_SUBTRACT`
 * - `OBS_BLEND_SCREEN`
 * - `OBS_BLEND_MULTIPLY`
 * - `OBS_BLEND_LIGHTEN`
 * - `OBS_BLEND_DARKEN`
 *
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scene items
 */
final readonly class GetSceneItemBlendModeRequest implements RequestInterface
{
    /**
     * Numeric ID of the scene item
     *
     * @var int
     */
    public int $sceneItemId;
    /**
     * Name of the scene the item is in
     *
     * @var ?string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene the item is in
     *
     * @var ?string
     */
    public ?string $sceneUuid;
    public function __construct(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null)
    {
        $this->sceneItemId = $sceneItemId;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
    }
}
