<?php
namespace SoureCode\OBS\Generator;

use JetBrains\PhpStorm\Deprecated;
use PhpParser\BuilderFactory;

/**
 * @phpstan-type EnumCaseProtocol = array{description: string, enumIdentifier: string, rpcVersion: string, deprecated: bool, initialVersion: string, enumValue: string}
 */
final class EnumCase
{
    use AttributeAwareTrait;

    protected function __construct(
        public string $name,
        public string $value,
        /**
         * @var Attribute[]
         */
        public array $attributes,
        public string $description
    ) {
    }

    /**
     * @param Attribute[] $attributes
     */
    public static function create(
        string $name,
        string $value,
        array $attributes,
        string $description
    ): self {
        return new self(
            $name,
            $value,
            $attributes,
            $description
        );
    }

    public function generate(string $type, ?BuilderFactory $factory = null)
    {
        $factory = $factory ?? new BuilderFactory();

        $value = $this->value;

        if($type === 'int') {
            $value = $this->parseValue($factory, $value);
        }

        $caseBuilder = $factory->enumCase($this->name)
            ->setDocComment($this->description)
            ->setValue($value)
        ;

        foreach ($this->attributes as $attribute) {
            $caseBuilder->addAttribute($attribute->generate($factory));
        }

        return $caseBuilder->getNode();
    }

    private function parseValue(BuilderFactory $factory, string $value)
    {
        // starts with ( and next char musst be int
        if (str_starts_with($value, '(') && is_numeric($value[1])) {
            return eval('return ' . $value . ';');
        }

        if (str_starts_with($value, '(')) {
            $references = array_map(
                static function ($reference) use ($factory) {
                    return $factory->propertyFetch($factory->classConstFetch('self', trim($reference)), 'value');
                },
                explode('|', substr($value, 1, -1))
            );

            return Utils::buildBitwiseOr($references);
        }

        if ($value === '-1') {
            return -1;
        }

        return (int) $value;
    }

    public function isDeprecated(): bool
    {
        foreach ($this->attributes as $attribute) {
            if ($attribute->name === 'Deprecated') {
                return true;
            }
        }

        return false;
    }

    /**
     * @param EnumCaseProtocol $protocol
     *
     * @return EnumCase
     */
    public static function fromProtocol(array $protocol): EnumCase
    {
        $description = $protocol['description'];
        $enumIdentifier = $protocol['enumIdentifier'];
        $rpcVersion = $protocol['rpcVersion'];
        $deprecated = $protocol['deprecated'];
        $initialVersion = $protocol['initialVersion'];
        $enumValue = $protocol['enumValue'];

        $enumCaseAttributes = [];

        if($deprecated) {
            $enumCaseAttributes[] = Attribute::create(Deprecated::class);
        }

        return self::create(
            $enumIdentifier,
            $enumValue,
            $enumCaseAttributes,
            Utils::formatDocComment($description, ['since' => $initialVersion, 'rpcVersion' => $rpcVersion], 4),
        );
    }
}
