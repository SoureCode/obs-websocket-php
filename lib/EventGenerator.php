<?php

namespace SoureCode\OBS\Generator;

use JetBrains\PhpStorm\Deprecated;
use SoureCode\OBS\Protocol\EventInterface;
use function Symfony\Component\String\u;

final class EventGenerator extends ClassGenerator
{
    public static function fromProtocol(string $namespace, array $protocol): self
    {
        $className = $protocol['eventType'];
        $deprecated = $protocol['deprecated'];
        $initialVersion = $protocol['initialVersion'];
        $category = $protocol['category'];

        $namespace .= '\\' . u($category)->camel()->title();
        $className .= 'Event';

        $description = Utils::formatDocComment($protocol['description'], [
            'since' => $initialVersion,
            'rpcVersion' => $protocol['rpcVersion'],
            'complexity' => $protocol['complexity'],
            'category' => $category,
            'eventSubscription' => $protocol['eventSubscription'],
        ], 0);

        /**
         * @var Attribute[] $attributes
         */
        $attributes = [];

        if ($deprecated) {
            $attributes[] = Attribute::create(Deprecated::class);
        }

        /**
         * @var Property[] $properties
         */
        $properties = [];

        foreach ($protocol['dataFields'] as $dataField) {
            $properties[] = Property::fromEventProtocol($dataField);
        }

        return new self(
            $namespace,
            $className,
            null,
            [EventInterface::class],
            $description,
            $attributes,
            $properties,
        );
    }
}
