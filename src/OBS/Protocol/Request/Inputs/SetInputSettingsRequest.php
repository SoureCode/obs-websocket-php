<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the settings of an input.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class SetInputSettingsRequest implements RequestInterface
{
    /**
     * Object of settings to apply
     *
     * @var array
     */
    public array $inputSettings;
    /**
     * Name of the input to set the settings of
     *
     * @var ?string
     */
    public ?string $inputName;
    /**
     * UUID of the input to set the settings of
     *
     * @var ?string
     */
    public ?string $inputUuid;
    /**
     * True == apply the settings on top of existing ones, False == reset the input to its defaults, then apply settings.
     *
     * @var ?bool
     */
    public ?bool $overlay;
    /**
     * @param array $inputSettings
     */
    public function __construct(array $inputSettings, ?string $inputName = null, ?string $inputUuid = null, ?bool $overlay = null)
    {
        $this->inputSettings = $inputSettings;
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
        $this->overlay = $overlay;
    }
}
