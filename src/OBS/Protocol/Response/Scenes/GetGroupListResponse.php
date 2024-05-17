<?php

namespace SoureCode\OBS\Protocol\Response\Scenes;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Gets an array of all groups in OBS.
 * 
 * Groups in OBS are actually scenes, but renamed and modified. In obs-websocket, we treat them as scenes where we can.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category scenes
 */
final readonly class GetGroupListResponse implements ResponseInterface
{
    /**
     * Array of group names
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var array<string>
     */
    public array $groups;
    public function __construct(array $groups)
    {
        $this->groups = $groups;
    }
}