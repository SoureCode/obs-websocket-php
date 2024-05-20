<?php

namespace SoureCode\OBS\Generator;

use JetBrains\PhpStorm\Deprecated;
use PhpParser\BuilderFactory;
use PhpParser\Node;
use PhpParser\Node\Stmt\Namespace_;

/**
 * @phpstan-import-type EnumCaseProtocol from EnumCase
 * @phpstan-type EnumProtocol = array{enumType: string, enumIdentifiers: EnumCaseProtocol[]}
 */
final class EnumGenerator
{
    use AttributeAwareTrait;

    protected function __construct(
        public string  $namespace,
        /**
         * @var string[]
         */
        public array $uses,
        public string  $name,
        public string  $type,
        public ?string $description,
        /**
         * @var Attribute[]
         */
        public array   $attributes,
        /**
         * @var EnumCase[]
         */
        public array   $cases
    ) {
    }

    /**
     * @param string[] $uses
     * @param Attribute[] $attributes
     * @param EnumCase[] $cases
     */
    public static function create(
        string  $namespace,
        array $uses,
        string  $name,
        string  $type,
        ?string $description,
        array   $attributes,
        array   $cases
    ): EnumGenerator {
        $deprecatedCount = array_sum(array_map(static fn (EnumCase $case) => $case->countAttribute('Deprecated'), $cases));
        $hasDeprecated = $deprecatedCount > 0;
        $allDeprecated = $deprecatedCount === count($cases);

        if ($hasDeprecated) {
            $uses[] = Deprecated::class;
        }

        if ($allDeprecated) {
            $attributes[] = Attribute::create(Deprecated::class);
        }

        return new self(
            $namespace,
            array_unique($uses),
            $name,
            $type,
            $description,
            $attributes,
            $cases
        );
    }

    public function generate(?BuilderFactory $factory = null): Node|Namespace_
    {
        $factory = $factory ?? new BuilderFactory();

        $namespaceBuilder = $factory->namespace($this->namespace);

        foreach ($this->uses as $use) {
            $namespaceBuilder->addStmt($factory->use($use));
        }

        $enumBuilder = $factory->enum($this->name)
            ->setScalarType($this->type);

        if ($this->description) {
            $enumBuilder->setDocComment(Utils::formatDocComment($this->description));
        }

        foreach ($this->attributes as $attribute) {
            $enumBuilder->addAttribute($attribute->generate($factory));
        }

        foreach ($this->cases as $case) {
            $enumBuilder->addStmt($case->generate($this->type, $factory));
        }

        $namespaceBuilder->addStmt($enumBuilder->getNode());

        return $namespaceBuilder->getNode();
    }

    /**
     * @param string $namespace
     * @param EnumProtocol $protocol
     * @return EnumGenerator
     */
    public static function fromProtocol(string $namespace, array $protocol): EnumGenerator
    {
        $enumType = $protocol['enumType'];
        $enumIdentifiers = $protocol['enumIdentifiers'];

        $backedType = Utils::guessTypeFromValue($enumIdentifiers[0]['enumValue']);

        /**
         * @var EnumCase[] $enumCases
         */
        $enumCases = [];

        foreach ($enumIdentifiers as $identifier) {
            $enumCases[] = EnumCase::fromProtocol($identifier);
        }

        return self::create(
            $namespace,
            [],
            $enumType,
            $backedType,
            null,
            [],
            $enumCases,
        );
    }
}
