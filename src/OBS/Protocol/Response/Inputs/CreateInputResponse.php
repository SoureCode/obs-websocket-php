<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;
/**
 * Creates a new input, adding it as a scene item to the specified scene.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class CreateInputResponse implements ResponseInterface
{
    /**
     * UUID of the newly created input
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var string
     */
    public string $inputUuid;
    /**
     * ID of the newly created scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @var int
     */
    public int $sceneItemId;
    public function __construct(string $inputUuid, int $sceneItemId)
    {
        $this->inputUuid = $inputUuid;
        $this->sceneItemId = $sceneItemId;
    }
}