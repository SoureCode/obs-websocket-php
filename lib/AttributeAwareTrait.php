<?php

namespace SoureCode\OBS\Generator;

trait AttributeAwareTrait
{
    public function countAttribute(string $name): int
    {
        return self::doCountAttribute($this->attributes, $name);
    }

    /*
     * @param Attribute[] $attributes
     */
    public static function doCountAttribute(array $attributes, string $name): int
    {
        return count(array_filter($attributes, static fn (Attribute $attribute) => $attribute->name === $name));
    }
}
