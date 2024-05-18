<?php

require 'vendor/autoload.php';

use SoureCode\OBS\Client;

$client = new Client('ws://localhost:4455');
$client->authenticate('mVdyEPMnkwAYrARw');

$streamStatus = $client->getStreamStatus();

var_dump($streamStatus);
