<?php
namespace SoureCode\OBS\Generator;

use JetBrains\PhpStorm\Deprecated;
use SoureCode\OBS\Protocol\ResponseInterface;
use function Symfony\Component\String\u;

final class ResponseGenerator extends ClassGenerator
{
    public static function fromProtocol(string $namespace, array $protocol): self
    {
        /**
         * @var class-string $className
         */
        $className = $protocol['requestType'];
        $category = $protocol['category'];
        $deprecated = $protocol['deprecated'];

        $namespace .= '\\' . u($category)->camel()->title();
        $className .= 'Response';

        $description = Utils::formatDocComment($protocol['description'], [
            'since' => $protocol['initialVersion'],
            'rpcVersion' => $protocol['rpcVersion'],
            'complexity' => $protocol['complexity'],
            'category' => $category
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

        foreach ($protocol['responseFields'] as $dataField) {
            $properties[] = Property::fromRequestProtocol($className, $dataField);
        }

        return new self(
            $namespace,
            $className,
            null,
            [ResponseInterface::class],
            $description,
            $attributes,
            $properties,
        );
    }
}
