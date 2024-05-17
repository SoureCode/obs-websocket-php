<?php

require 'vendor/autoload.php';

use SoureCode\OBS\Client;

try {
    $client = new Client('ws://localhost:4455');
    $client->authenticate('demo');

    $streamStatus = $client->getStreamStatus();

    var_dump($streamStatus);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
