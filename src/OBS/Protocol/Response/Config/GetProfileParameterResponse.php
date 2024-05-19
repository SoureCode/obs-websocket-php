<?php

namespace SoureCode\OBS\Protocol\Response\Config;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Gets a parameter from the current profile's configuration.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class GetProfileParameterResponse implements ResponseInterface
{
    /**
     * Value associated with the parameter. `null` if not set and no default
     *
     * @var ?string
     */
    public ?string $parameterValue;
    /**
     * Default value associated with the parameter. `null` if no default
     *
     * @var ?string
     */
    public ?string $defaultParameterValue;
    public function __construct(?string $parameterValue = null, ?string $defaultParameterValue = null)
    {
        $this->parameterValue = $parameterValue;
        $this->defaultParameterValue = $defaultParameterValue;
    }
}
