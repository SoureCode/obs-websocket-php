<?php

namespace SoureCode\OBS\Protocol\Response\Record;

use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * Resumes the record output.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 1
 * @category record
 */
final readonly class ResumeRecordResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
