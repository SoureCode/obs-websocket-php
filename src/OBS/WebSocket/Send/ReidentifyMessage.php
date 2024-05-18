<?php

namespace SoureCode\OBS\WebSocket\Send;

use SoureCode\OBS\WebSocket\SendMessageInterface;
use SoureCode\OBS\Protocol\Enum\EventSubscription;

final readonly class ReidentifyMessage implements SendMessageInterface
{
    public function __construct(
        public ?EventSubscription $eventSubscriptions = EventSubscription::All,
    )
    {
    }
}
