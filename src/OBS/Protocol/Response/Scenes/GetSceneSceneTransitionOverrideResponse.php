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
     */
    public ?string $transitionName;
    /**
     * Duration of the overridden scene transition, else `null`
     */
    public ?int $transitionDuration;

    public function __construct(?string $transitionName = null, ?int $transitionDuration = null)
    {
        $this->transitionName = $transitionName;
        $this->transitionDuration = $transitionDuration;
    }
}
