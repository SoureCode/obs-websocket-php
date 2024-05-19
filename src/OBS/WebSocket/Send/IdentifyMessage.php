<?php

namespace SoureCode\OBS\WebSocket\Send;

use SoureCode\OBS\WebSocket\SendMessageInterface;
use SoureCode\OBS\Protocol\Enum\EventSubscription;

final readonly class IdentifyMessage implements SendMessageInterface
{
    public function __construct(
        public int $rpcVersion,
        public ?string $authentication,
        public ?EventSubscription $eventSubscriptions = EventSubscription::All,
    ) {
    }
}
