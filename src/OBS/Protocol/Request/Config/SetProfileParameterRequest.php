<?php

namespace SoureCode\OBS\Protocol\Request\Config;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Sets the value of a parameter in the current profile's configuration.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category config
 */
final readonly class SetProfileParameterRequest implements RequestInterface
{
    /**
     * Category of the parameter to set
     *
     * @var string
     */
    public string $parameterCategory;
    /**
     * Name of the parameter to set
     *
     * @var string
     */
    public string $parameterName;
    /**
     * Value of the parameter to set. Use `null` to delete
     *
     * @var ?string
     */
    public ?string $parameterValue;
    public function __construct(string $parameterCategory, string $parameterName, ?string $parameterValue = null)
    {
        $this->parameterCategory = $parameterCategory;
        $this->parameterName = $parameterName;
        $this->parameterValue = $parameterValue;
    }
}
