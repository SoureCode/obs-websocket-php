<?php

namespace SoureCode\OBS\Message\Receive;

use SoureCode\OBS\Message\Embedding\ResponseStatus;
use SoureCode\OBS\Message\ReceiveMessageInterface;
use SoureCode\OBS\Protocol\ResponseInterface;

/**
 * @template-covariant T of ResponseInterface
 */
final readonly class RequestResponseMessage implements ReceiveMessageInterface
{
    /**
     * @param T|null $responseData
     */
    public function __construct(
        public string             $requestType,
        public string             $requestId,
        public ResponseStatus     $requestStatus,
        /**
         * @var T|null $responseData
         */
        public ?ResponseInterface $responseData = null,
    )
    {
    }
}
