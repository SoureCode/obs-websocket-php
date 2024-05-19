<?php

namespace SoureCode\OBS\Protocol\Response\Ui;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Opens a projector for a source.
 *
 * Note: This request serves to provide feature parity with 4.x. It is very likely to be changed/deprecated in a future release.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 3
 * @category ui
 */
final readonly class OpenSourceProjectorResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
