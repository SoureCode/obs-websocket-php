<?php

namespace SoureCode\OBS\Protocol\Event\Config;

use SoureCode\OBS\Protocol\EventInterface;

/**
 * The current scene collection has begun changing.
 *
 * Note: We recommend using this event to trigger a pause of all polling requests, as performing any requests during a
 * scene collection change is considered undefined behavior and can cause crashes!
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category config
 * @eventSubscription Config
 */
final readonly class CurrentSceneCollectionChangingEvent implements EventInterface
{
    /**
     * Name of the current scene collection
     *
     * @var string
     */
    public string $sceneCollectionName;
    public function __construct(string $sceneCollectionName)
    {
        $this->sceneCollectionName = $sceneCollectionName;
    }
}
