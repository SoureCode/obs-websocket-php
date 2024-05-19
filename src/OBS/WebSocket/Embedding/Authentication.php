<?php

namespace SoureCode\OBS\WebSocket\Embedding;

final readonly class Authentication
{
    public function __construct(
        public string $challenge,
        public string $salt
    ) {
    }
}
