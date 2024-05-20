<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetSceneItemBlendModeResponse implements ResponseInterface
{
    /**
     * Current blend mode
     */
    public string $sceneItemBlendMode;

    public function __construct(string $sceneItemBlendMode)
    {
        $this->sceneItemBlendMode = $sceneItemBlendMode;
    }
}
