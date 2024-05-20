<?php

namespace SoureCode\OBS\Generator;

use PhpParser\BuilderFactory;
use PhpParser\Node;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class Property
{
    use AttributeAwareTrait;

    public function __construct(
        public string $name,
        public string $type,
        public string $docType,
        public ?string $description = null,
        /**
         * @var Attribute[]
         */
        public array $attributes = [],
    ) {
    }

    public function isOptional(): bool
    {
        return str_starts_with($this->type, '?');
    }

    /**
     * @param string $name
     * @param string $type
     * @param string $docType
     * @param ?string $description
     * @param Attribute[] $attributes
     * @return self
     */
    public static function create(
        string $name,
        string $type,
        string $docType,
        ?string $description = null,
        array $attributes = [],
    ): self {
        return new self(
            $name,
            $type,
            $docType,
            $description,
            $attributes,
        );
    }

    public function generate(?BuilderFactory $factory = null): Node|Node\Stmt\Property
    {
        $factory = $factory ?? new BuilderFactory();

        $property = $factory->property($this->name);
        $property->setType($this->type);
        $property->setDocComment($this->description);

        foreach ($this->attributes as $attribute) {
            $property->addAttribute($attribute->generate($factory));
        }

        return $property->getNode();
    }

    /**
     * @param class-string $className
     */
    public static function fromEventProtocol(string $className, array $protocol): Property
    {
        $valueName = $protocol['valueName'];
        $valueDescription = $protocol['valueDescription'];

        [$valueType, $docType] = Utils::resolveValueType($className, $valueName, $protocol['valueType'], $valueDescription);
        [$propertyName, $originalName] = Utils::normalizeName($valueName);

        $description = Utils::formatDocComment($valueDescription, [
            'var' => $docType,
        ], 4);

        $attributes = [];

        if ($propertyName !== $originalName) {
            $attributes[] = Attribute::create(SerializedName::class, [$originalName]);
        }

        return self::create(
            $propertyName,
            $valueType,
            $docType,
            $description,
            $attributes,
        );
    }

    /**
     * @param class-string $className
     */
    public static function fromRequestProtocol(string $className, array $protocol): Property
    {
        $valueName = $protocol['valueName'];
        $valueType = $protocol['valueType'];
        $valueDescription = $protocol['valueDescription'];
        $valueRestriction = $protocol['valueRestriction'] ?? null;
        $isOptional = Utils::isOptional($protocol['valueOptional'] ?? false, $valueDescription);

        [$valueType, $docType] = Utils::resolveValueType($className, $valueName, $valueType, $valueDescription, $valueRestriction);
        [$propertyName, $originalName] = Utils::normalizeName($valueName);

        $targetType = $valueType;
        $targetRealType = $docType;

        if ($isOptional && $valueType !== "mixed") {
            $targetType = '?' . $valueType;
            $targetRealType = '?' . $docType;
        }

        $tags = [
            'restriction' => $valueRestriction,
            'optionalBehaviour' => $protocol['valueOptionalBehaviour'] ?? null,
        ];

        if (!Utils::isNativeBuiltInType($valueType)) {
            $tags['var'] = $docType;
        }

        $description = Utils::formatDocComment($valueDescription, $tags, 4);

        $attributes = [];

        if ($propertyName !== $originalName) {
            $attributes[] = Attribute::create(SerializedName::class, [$originalName]);
        }

        return self::create(
            $propertyName,
            $targetType,
            $targetRealType,
            $description,
            $attributes,
        );
    }
}
