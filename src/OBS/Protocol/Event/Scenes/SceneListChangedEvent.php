<?php

namespace SoureCode\OBS\Protocol\Event\Scenes;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * The list of scenes has changed.
 * 
 * TODO: Make OBS fire this event when scenes are reordered.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class SceneListChangedEvent implements EventInterface
{
    /**
     * Updated array of scenes
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array<object>
     */
    public array $scenes;
    public function __construct(array $scenes)
    {
        $this->scenes = $scenes;
    }
}