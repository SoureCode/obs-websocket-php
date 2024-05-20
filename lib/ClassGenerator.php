<?php

namespace SoureCode\OBS\Generator;

use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\Assign;

class ClassGenerator
{
    use AttributeAwareTrait;

    /**
     * @var Property[]
     */
    public array  $properties;

    /**
     * @param Property[] $properties
     */
    protected function __construct(
        public string $namespace,
        public string $name,
        public ?string $extends,
        /**
         * @var string[]
         */
        public array $implements,
        public string $description,
        /**
         * @var Attribute[]
         */
        public array  $attributes,
        array  $properties,
    ) {
        usort($properties, static fn (Property $a, Property $b) => $a->isOptional() <=> $b->isOptional());

        $this->properties = $properties;
    }

    /**
     * @return class-string
     */
    public function getReference(): string
    {
        return $this->namespace . '\\' . $this->name;
    }

    public function generate(?BuilderFactory $factory = null)
    {
        $factory = $factory ?? new BuilderFactory();

        $namespaceBuilder = $factory->namespace($this->namespace);

        $classBuilder = $factory->class($this->name)
            ->makeFinal()
            ->makeReadonly()
            ->setDocComment($this->description);

        $addedUses = [];

        if ($this->extends) {
            $namespaceBuilder->addStmt($factory->use($this->extends));
            $classBuilder->extend(Utils::resolveClassShorthand($this->extends));
            $addedUses[] = $this->extends;
        }

        foreach ($this->implements as $implement) {
            if (!in_array($implement, $addedUses, true)) {
                $namespaceBuilder->addStmt($factory->use($implement));
                $addedUses[] = $implement;
            }

            $classBuilder->implement(Utils::resolveClassShorthand($implement));
        }

        foreach ($this->attributes as $attribute) {
            if (!in_array($attribute->name, $addedUses, true)) {
                $namespaceBuilder->addStmt($factory->use($attribute->name));
                $addedUses[] = $attribute->name;
            }

            $classBuilder->addAttribute($attribute->generate($factory));
        }

        $constructorBuilder = $factory
            ->method('__construct')
            ->makePublic();

        $paramTypes = [];

        foreach ($this->properties as $property) {
            foreach ($property->attributes as $attribute) {
                if (!in_array($attribute->name, $addedUses, true)) {
                    $namespaceBuilder->addStmt($factory->use($attribute->name));
                    $addedUses[] = $attribute->name;
                }
            }

            $classBuilder->addStmt($property->generate($factory));

            $param = $factory->param($property->name)
                ->setType($property->type);

            if ($property->isOptional()) {
                $param->setDefault(null);
            }

            if(!Utils::isNativeBuiltInType($property->type)) {
                $paramTypes[] = $property->docType . ' $' . $property->name;
            }

            $constructorBuilder->addParam($param);

            $assign = new Assign(
                $factory->propertyFetch($factory->var('this'), $property->name),
                $factory->var($property->name)
            );

            $constructorBuilder->addStmt($assign);
        }

        $constructorBuilder->setDocComment(Utils::formatDocComment('', [
                'param' => $paramTypes,
            ], 4));

        $classBuilder->addStmt($constructorBuilder);
        $namespaceBuilder->addStmt($classBuilder);

        return $namespaceBuilder->getNode();
    }
}
