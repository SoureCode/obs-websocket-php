<?php

namespace SoureCode\OBS\Message\Send;

use SoureCode\OBS\Message\SendMessageInterface;
use SoureCode\OBS\Protocol\Enum\EventSubscription;

final readonly class ReidentifyMessage implements SendMessageInterface
{
    public function __construct(
        public ?EventSubscription $eventSubscriptions = EventSubscription::All,
    )
    {
    }
}
