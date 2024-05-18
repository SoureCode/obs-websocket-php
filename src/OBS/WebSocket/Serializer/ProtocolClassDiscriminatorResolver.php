<?php

namespace SoureCode\OBS\WebSocket\Serializer;

use SoureCode\OBS\Protocol\EventInterface;
use SoureCode\OBS\Protocol\ResponseInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorMapping;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorResolverInterface;
use function Symfony\Component\String\u;

class ProtocolClassDiscriminatorResolver implements ClassDiscriminatorResolverInterface
{
    private array $responses = [];
    private array $events = [];

    public function __construct()
    {
        $projectDirectory = dirname(__DIR__, 4);

        $responsesFolder = $projectDirectory . '/src/OBS/Protocol/Response';
        $eventsFolder = $projectDirectory . '/src/OBS/Protocol/Event';

        $responses = (new Finder())->in($responsesFolder)->files();
        $events = (new Finder())->in($eventsFolder)->files();

        foreach ($responses as $response) {
            $contents = file_get_contents($response->getRealPath());
            $namespace = u($contents)->match('/namespace (.+);/')[1];
            $name = $response->getBasename('.php');
            $type = u($name)->beforeLast('Response')->toString();

            $this->responses[$type] = $namespace . '\\' . $name;
        }

        foreach ($events as $event) {
            $contents = file_get_contents($event->getRealPath());
            $namespace = u($contents)->match('/namespace (.+);/')[1];
            $name = $event->getBasename('.php');
            $type = u($name)->beforeLast('Event')->toString();

            $this->events[$type] = $namespace . '\\' . $name;
        }
    }

    public function getMappingForClass(string $class): ?ClassDiscriminatorMapping
    {
        if ($class === ResponseInterface::class) {
            return new ClassDiscriminatorMapping('serializerType', $this->responses);
        }

        if ($class === EventInterface::class) {
            return new ClassDiscriminatorMapping('serializerType', $this->events);
        }

        return null;
    }

    public function getMappingForMappedObject(object|string $object): ?ClassDiscriminatorMapping
    {
        $class = is_string($object) ? $object : $object::class;

        return $this->getMappingForClass($class);
    }
    public function getTypeForMappedObject(object|string $object): ?string
    {
        $class = is_string($object) ? $object : $object::class;

        // @todo what to do here?
        // var_dump([self::class, $class]);

        return null;
    }
}
