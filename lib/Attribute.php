<?php
namespace SoureCode\OBS\Generator;

use PhpParser\BuilderFactory;

final  class Attribute
{
    protected function __construct(
        /**
         * @var class-string
         */
        public string $name,
        /**
         * @var null|array
         */
        public ?array $args = null,
    ) {
    }

    /**
     * @param class-string $name
     */
    public static function create(
        string $name,
        ?array $args = null,
    ): Attribute {
        return new self($name, $args);
    }

    public function generate(?BuilderFactory $factory = null): \PhpParser\Node\Attribute
    {
        $factory = $factory ?? new BuilderFactory();

        return $factory->attribute(Utils::resolveClassShorthand($this->name), $this->args ?? []);
    }
}
