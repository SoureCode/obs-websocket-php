<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class GetInputSettingsResponse implements ResponseInterface
{
    /**
     * Object of settings for the input
     *
     * @var array
     */
    public array $inputSettings;
    /**
     * The kind of the input
     */
    public string $inputKind;
    /**
     * @param array $inputSettings
     */
    public function __construct(array $inputSettings, string $inputKind)
    {
        $this->inputSettings = $inputSettings;
        $this->inputKind = $inputKind;
    }
}
