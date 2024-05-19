<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The scene collection list has changed.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 * @eventSubscription Config
 */
final readonly class SceneCollectionListChangedEvent implements EventInterface
{
    /**
     * Updated list of scene collections
     *
     * @var array<string>
     */
    public array $sceneCollections;
    public function __construct(array $sceneCollections)
    {
        $this->sceneCollections = $sceneCollections;
    }
}
