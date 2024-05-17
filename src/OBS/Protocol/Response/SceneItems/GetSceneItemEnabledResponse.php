<?php

namespace SoureCode\OBS\Protocol\Response\SceneItems;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the enable state of a scene item.
 * 
 * Scenes and Groups
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category scene items
 */
final readonly class GetSceneItemEnabledResponse implements ResponseInterface
{
    /**
     * Whether the scene item is enabled. `true` for enabled, `false` for disabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var bool
     */
    public bool $sceneItemEnabled;
    public function __construct(bool $sceneItemEnabled)
    {
        $this->sceneItemEnabled = $sceneItemEnabled;
    }
}