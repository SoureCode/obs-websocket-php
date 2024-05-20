<?php

namespace SoureCode\OBS\Protocol\Response\Transitions;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets an array of all available transition kinds.
 *
 * Similar to `GetInputKindList`
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category transitions
 */
final readonly class GetTransitionKindListResponse implements ResponseInterface
{
    /**
     * Array of transition kinds
     *
     * @var array<string>
     */
    public array $transitionKinds;
    /**
     * @param array<string> $transitionKinds
     */
    public function __construct(array $transitionKinds)
    {
        $this->transitionKinds = $transitionKinds;
    }
}
