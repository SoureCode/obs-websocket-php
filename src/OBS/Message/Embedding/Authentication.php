<?php

namespace SoureCode\OBS\Message\Embedding;

final readonly class Authentication
{
    public function __construct(
        public string $challenge,
        public string $salt
    )
    {
    }
}
