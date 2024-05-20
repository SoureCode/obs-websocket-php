<?php

namespace SoureCode\OBS\Protocol\Request\Inputs;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Gets an array of all available input kinds in OBS.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 2
 * @category inputs
 */
final readonly class GetInputKindListRequest implements RequestInterface
{
    /**
     * True == Return all kinds as unversioned, False == Return with version suffixes (if available)
     */
    public ?bool $unversioned;

    public function __construct(?bool $unversioned = null)
    {
        $this->unversioned = $unversioned;
    }
}
