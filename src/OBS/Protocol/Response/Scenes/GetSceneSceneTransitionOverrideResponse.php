<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets the scene transition overridden for a scene.
 * 
 * Note: A transition UUID response field is not currently able to be implemented as of 2024-1-18.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetSceneSceneTransitionOverrideResponse implements ResponseInterface
{
    /**
     * Name of the overridden scene transition, else `null`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $transitionName;
    /**
     * Duration of the overridden scene transition, else `null`
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $transitionDuration;
    public function __construct(string $transitionName, int $transitionDuration)
    {
        $this->transitionName = $transitionName;
        $this->transitionDuration = $transitionDuration;
    }
}