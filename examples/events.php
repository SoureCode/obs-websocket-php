<?php

require 'vendor/autoload.php';

use SoureCode\OBS\Client;
use SoureCode\OBS\Protocol\Enum\EventSubscription;
use SoureCode\OBS\Protocol\Event\Inputs\InputSettingsChangedEvent;

$client = new Client('ws://localhost:4455');
$client->authenticate('demo', EventSubscription::All);

$exit = false;

while (!$exit) {
    $event = $client->pollEvent();
    $data = $event->eventData;

    if ($data instanceof InputSettingsChangedEvent) {
        if ($data->inputName !== 'T_TIMECODE') {
            var_dump($data);
        }
    } else {
        var_dump($data);
    }
}
