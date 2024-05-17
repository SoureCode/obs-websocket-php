<?php

namespace SoureCode\OBS\Message\Send;

use SoureCode\OBS\Message\SendMessageInterface;
use SoureCode\OBS\Protocol\Enum\EventSubscription;

final readonly class IdentifyMessage implements SendMessageInterface
{
    public function __construct(
        public int $rpcVersion,
        public ?string $authentication,
        public ?EventSubscription $eventSubscriptions = EventSubscription::All,
    )
    {
    }
}
