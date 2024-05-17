<?php

namespace SoureCode\OBS\Protocol\Request\Transitions;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Sets the position of the TBar.
 * 
 * **Very important note**: This will be deprecated and replaced in a future version of obs-websocket.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category transitions
 */
final readonly class SetTBarPositionRequest implements RequestInterface
{
    /**
     * New position
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type int
     */
    public int $position;
    /**
     * Whether to release the TBar. Only set `false` if you know that you will be sending another position update
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public ?bool $release;
    public function __construct(int $position, ?bool $release = null)
    {
        $this->position = $position;
        $this->release = $release;
    }
}