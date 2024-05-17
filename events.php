<?php

require 'vendor/autoload.php';

use SoureCode\OBS\Client;
use SoureCode\OBS\Protocol\Enum\EventSubscription;
use SoureCode\OBS\Protocol\Event\Inputs\InputSettingsChangedEvent;

try {
    $client = new Client('ws://localhost:4455');
    $client->authenticate('demo', EventSubscription::All);

    while (true){
        $event = $client->pollEvent();
        $data = $event->eventData;

        if ($data instanceof InputSettingsChangedEvent) {
            if ($data->inputName !== 'T_TIMECODE'){
                var_dump($data);
            }
        } else {
            var_dump($data);
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
