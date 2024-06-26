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
     */
    public string $inputName;
    /**
     * The kind of input to be created
     */
    public string $inputKind;
    /**
     * Name of the scene to add the input to as a scene item
     */
    public ?string $sceneName;
    /**
     * UUID of the scene to add the input to as a scene item
     */
    public ?string $sceneUuid;
    /**
     * Settings object to initialize the input with
     *
     * @var array
     */
    public ?array $inputSettings;
    /**
     * Whether to set the created scene item to enabled or disabled
     */
    public ?bool $sceneItemEnabled;
    /**
     * @param ?array $inputSettings
     */
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
