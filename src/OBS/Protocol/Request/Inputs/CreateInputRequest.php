<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Creates a new input, adding it as a scene item to the specified scene.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class CreateInputRequest implements RequestInterface
{
    /**
     * Name of the new input to created
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputName;
    /**
     * The kind of input to be created
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputKind;
    /**
     * Name of the scene to add the input to as a scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to add the input to as a scene item
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public ?string $sceneUuid;
    /**
     * Settings object to initialize the input with
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type array
     */
    public ?array $inputSettings;
    /**
     * Whether to set the created scene item to enabled or disabled
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type bool
     */
    public ?bool $sceneItemEnabled;
    public function __construct(string $inputName, string $inputKind, ?string $sceneName = null, ?string $sceneUuid = null, ?array $inputSettings = null, ?bool $sceneItemEnabled = null)
    {
        $this->inputName = $inputName;
        $this->inputKind = $inputKind;
        $this->sceneName = $sceneName;
        $this->sceneUuid = $sceneUuid;
        $this->inputSettings = $inputSettings;
        $this->sceneItemEnabled = $sceneItemEnabled;
    }
}