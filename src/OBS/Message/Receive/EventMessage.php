<?php

namespace SoureCode\OBS\Message\Receive;

use SoureCode\OBS\Message\ReceiveMessageInterface;
use SoureCode\OBS\Protocol\EventInterface;

final readonly class EventMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $eventType,
        public int $eventIntent,
        public ?EventInterface $eventData = null,
    )
    {
    }
}
