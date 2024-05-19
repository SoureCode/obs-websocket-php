<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets a parameter from the current profile's configuration.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class GetProfileParameterRequest implements RequestInterface
{
    /**
     * Category of the parameter to get
     *
     * @var string
     */
    public string $parameterCategory;
    /**
     * Name of the parameter to get
     *
     * @var string
     */
    public string $parameterName;
    public function __construct(string $parameterCategory, string $parameterName)
    {
        $this->parameterCategory = $parameterCategory;
        $this->parameterName = $parameterName;
    }
}
