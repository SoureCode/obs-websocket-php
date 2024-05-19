<?php

/**
 * Copyright (C) 2014-2024 Textalk and contributors.
 * This file is part of Websocket PHP and is free software under the ISC License.
 */

namespace SoureCode\OBS\WebSocket\Middleware;

use Psr\Log\{LoggerAwareInterface, LoggerAwareTrait};
use SoureCode\OBS\Protocol\Enum\WebSocketCloseCode;
use WebSocket\Connection;
use WebSocket\Message\{Close, Message};
use WebSocket\Middleware\ProcessIncomingInterface;
use WebSocket\Middleware\ProcessOutgoingInterface;
use WebSocket\Middleware\ProcessStack;
use WebSocket\Trait\StringableTrait;

/**
 * Base on WebSocket\Middleware\CloseHandler class.
 * Handles close procedure with more information about the OBS Close Code.
 */
class OBSCloseHandler implements LoggerAwareInterface, ProcessIncomingInterface, ProcessOutgoingInterface
{
    use LoggerAwareTrait;
    use StringableTrait;

    public function processIncoming(ProcessStack $stack, Connection $connection): Message
    {
        $message = $stack->handleIncoming(); // Proceed before logic

        if (!$message instanceof Close) {
            return $message;
        }

        if ($connection->isWritable()) {
            // Remote sent Close; acknowledge and close for further reading
            $enum = WebSocketCloseCode::tryFrom($message->getCloseStatus());

            if($enum) {
                $this->logger->info("[close-handler] Received 'close', status: {$enum->value} - {$enum->name}");
            } else {
                $this->logger->error("[close-handler] Received 'close', status: {$message->getCloseStatus()} - Unknown");
            }

            $ack = "Close acknowledged: {$message->getCloseStatus()}";

            $connection->closeRead();
            $connection->send(new Close($message->getCloseStatus(), $ack));
        } else {
            // Remote sent Close/Ack: disconnect
            $this->logger->debug("[close-handler] Received 'close' acknowledge, disconnecting");
            $connection->disconnect();
        }
        return $message;
    }

    public function processOutgoing(ProcessStack $stack, Connection $connection, Message $message): Message
    {
        $message = $stack->handleOutgoing($message); // Proceed before logic
        if (!$message instanceof Close) {
            return $message;
        }
        if ($connection->isReadable()) {
            // Local sent Close: close for further writing, expect remote acknowledge
            $this->logger->debug("[close-handler] Sent 'close', status: {$message->getCloseStatus()}");
            $connection->closeWrite();
        } else {
            // Local sent Close/Ack: disconnect
            $this->logger->debug("[close-handler] Sent 'close' acknowledge, disconnecting");
            $connection->disconnect();
        }
        return $message;
    }
}
