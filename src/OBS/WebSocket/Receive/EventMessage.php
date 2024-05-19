<?php

namespace SoureCode\OBS\WebSocket\Receive;

use SoureCode\OBS\WebSocket\ReceiveMessageInterface;
use SoureCode\OBS\Protocol\EventInterface;

final readonly class EventMessage implements ReceiveMessageInterface
{
    public function __construct(
        public string $eventType,
        public int $eventIntent,
        public ?EventInterface $eventData = null,
    ) {
    }
}
