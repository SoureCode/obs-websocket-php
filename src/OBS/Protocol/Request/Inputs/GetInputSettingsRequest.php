<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets the settings of an input.
 *
 * Note: Does not include defaults. To create the entire settings object, overlay `inputSettings` over the `defaultInputSettings` provided by `GetInputDefaultSettings`.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class GetInputSettingsRequest implements RequestInterface
{
    /**
     * Name of the input to get the settings of
     */
    public ?string $inputName;
    /**
     * UUID of the input to get the settings of
     */
    public ?string $inputUuid;

    public function __construct(?string $inputName = null, ?string $inputUuid = null)
    {
        $this->inputName = $inputName;
        $this->inputUuid = $inputUuid;
    }
}
