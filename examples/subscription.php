<?php

require 'vendor/autoload.php';

use SoureCode\OBS\Client;
use SoureCode\OBS\Protocol\Enum\WebSocketOpCode;
use SoureCode\OBS\WebSocket\Middleware\OBSAuthenticationHandler;
use SoureCode\OBS\WebSocket\Middleware\OBSCloseHandler;
use SoureCode\OBS\WebSocket\OBSMessage;

$client = new Client('ws://localhost:4455');

$client
    ->addMiddleware(new OBSCloseHandler())
    ->addMiddleware(new OBSAuthenticationHandler('demo'))
    ->on(function (OBSMessage $message, Client $client) {
        var_dump($message->op->name);

        if ($message->op === WebSocketOpCode::Identified) {
            $list = $client->getSceneList();

            var_dump($list->currentProgramSceneName);
        }
    })
    ->start();
