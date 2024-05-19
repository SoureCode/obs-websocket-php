<?php
namespace SoureCode\OBS\Generator;

use PhpParser\BuilderFactory;
use PhpParser\Node;
use Symfony\Component\Serializer\Attribute\SerializedName;

final  class Property
{
    use AttributeAwareTrait;

    public function __construct(
        public string $name,
        public string $type,
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
     * @param ?string $description
     * @param Attribute[] $attributes
     * @return self
     */
    public static function create(
        string $name,
        string $type,
        ?string $description = null,
        array $attributes = [],
    ): self {
        return new self(
            $name,
            $type,
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

    public static function fromEventProtocol(array $protocol): Property
    {
        $valueDescription = $protocol['valueDescription'];

        [$valueType, $realType] = Utils::resolveValueType($protocol['valueType'], $valueDescription);
        [$propertyName, $originalName] = Utils::normalizeName($protocol['valueName']);

        $description = Utils::formatDocComment($valueDescription, [
            'var' => $realType,
        ], 4);

        $attributes = [];

        if ($propertyName !== $originalName) {
            $attributes[] = Attribute::create(SerializedName::class, [$originalName]);
        }

        return self::create(
            $propertyName,
            $valueType,
            $description,
            $attributes,
        );
    }

    public static function fromRequestProtocol(array $protocol): Property
    {
        $valueName = $protocol['valueName'];
        $valueType = $protocol['valueType'];
        $valueDescription = $protocol['valueDescription'];
        $valueRestriction = $protocol['valueRestriction'] ?? null;
        $isOptional = Utils::isOptional($protocol['valueOptional'] ?? false, $valueDescription);

        [$valueType, $realType] = Utils::resolveValueType($valueType, $valueDescription, $valueRestriction);
        [$propertyName, $originalName] = Utils::normalizeName($valueName);

        $targetType = $valueType;
        $targetRealType = $realType;

        if ($isOptional && $valueType !== "mixed") {
            $targetType = '?' . $valueType;
            $targetRealType = '?' . $realType;
        }

        $tags = [
            'var' => $targetRealType,
            'restriction' => $valueRestriction,
            'optionalBehaviour' => $protocol['valueOptionalBehaviour'] ?? null,
        ];

        $description = Utils::formatDocComment($valueDescription, $tags, 4);

        $attributes = [];

        if ($propertyName !== $originalName) {
            $attributes[] = Attribute::create(SerializedName::class, [$originalName]);
        }

        return self::create(
            $propertyName,
            $targetType,
            $description,
            $attributes,
        );
    }
}
