<?php

namespace SoureCode\OBS\Message\Embedding;

final readonly class ResponseStatus
{
    public function __construct(
        public bool $result,
        public int $code,
        public ?string $comment = null,
    )
    {
    }
}
