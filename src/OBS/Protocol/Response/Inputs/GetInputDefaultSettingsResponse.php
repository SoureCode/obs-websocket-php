<?php

namespace SoureCode\OBS\Protocol\Response\Inputs;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets the default settings for an input kind.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class GetInputDefaultSettingsResponse implements ResponseInterface
{
    /**
     * Object of default settings for the input kind
     *
     * @var array
     */
    public array $defaultInputSettings;
    public function __construct(array $defaultInputSettings)
    {
        $this->defaultInputSettings = $defaultInputSettings;
    }
}
