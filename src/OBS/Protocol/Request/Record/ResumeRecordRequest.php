<?php

namespace SoureCode\OBS\Protocol\Request\Record;

use SoureCode\OBS\Protocol\RequestInterface;

/**
 * Resumes the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class ResumeRecordRequest implements RequestInterface
{
    public function __construct()
    {
    }
}
