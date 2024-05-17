<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Gets the default settings for an input kind.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category inputs
 */
final readonly class GetInputDefaultSettingsRequest implements RequestInterface
{
    /**
     * Input kind to get the default settings for
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $inputKind;
    public function __construct(string $inputKind)
    {
        $this->inputKind = $inputKind;
    }
}