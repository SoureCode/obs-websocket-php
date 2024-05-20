<?php

namespace SoureCode\OBS\Generator;

use JetBrains\PhpStorm\Deprecated;
use PhpParser\Node\Expr\BinaryOp\BitwiseOr;
use PhpParser\Node\Expr\ClassConstFetch;
use SoureCode\OBS\Protocol\EventInterface;
use SoureCode\OBS\Protocol\RequestInterface;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputKindListResponse;
use SoureCode\OBS\Protocol\ResponseInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;
use function Symfony\Component\String\u;

class Utils
{
    /**
     * @var array<class-string, string>
     */
    public const array CLASS_MAPPING = [
        Deprecated::class => 'Deprecated',
        SerializedName::class => 'SerializedName',
        EventInterface::class => 'EventInterface',
        RequestInterface::class => 'RequestInterface',
        ResponseInterface::class => 'ResponseInterface',
    ];

    public const array DOC_TYPE_MAPPING = [
        GetInputKindListResponse::class => [
            "inputKinds" => "array<string>"
        ]
    ];

    /**
     * @param class-string $name
     * @return string|null
     */
    public static function resolveClassShorthand(string $name): ?string
    {
        return self::CLASS_MAPPING[$name] ?? null;
    }

    public static function formatDocComment(?string $text, ?array $tags = null, int $indention = 0): string
    {
        $inputLines = $text ? explode(PHP_EOL, $text) : [];
        $indentionString = str_repeat(' ', $indention);

        $outputLines = ['/**'];

        foreach ($inputLines as $line) {
            $outputLines[] = $indentionString . ' * ' . $line;
        }

        if ($tags !== null) {
            if(count($outputLines) > 1) {
                $outputLines[] = $indentionString . ' *';
            }

            foreach ($tags as $name => $value) {
                if ($value === null) { // Skip null values
                    continue;
                }

                if (is_array($value)) {
                    foreach ($value as $item) {
                        $outputLines[] = $indentionString . ' * @' . $name . ' ' . $item;
                    }

                    continue;
                }

                $outputLines[] = $indentionString . ' * @' . $name . ' ' . $value;
            }
        }

        if (count($outputLines) === 1){
            return '';
        }

        $outputLines[] = $indentionString . ' */';

        return implode(PHP_EOL, $outputLines);
    }

    /**
     * @todo improve PHPDoc types
     *
     * @param class-string $className
     *
     * @return array{string, string} [0] = PHP type, [1] = PHPDoc type
     */
    public static function resolveValueType(string $className, string $valueName, mixed $valueType, string $description, ?string $restrictions = null): array
    {
        $valueType = strtolower($valueType);

        if ($valueType === "any") {
            return ["mixed", self::resolveDocType($className, $valueName, "mixed")];
        }

        if ($valueType === "object") {
            return ["array", self::resolveDocType($className, $valueName, "array")];
        }

        if ($valueType === "boolean") {
            return ["bool", self::resolveDocType($className, $valueName, "bool")];
        }

        if ($valueType === "number") {
            if (preg_match('/\d+\.\d+/', $description) || preg_match('/\d+\.\d+/', $restrictions)) {
                return ["float", self::resolveDocType($className, $valueName, "float")];
            }

            return ["int", self::resolveDocType($className, $valueName, "int")];
        }

        if (str_starts_with($valueType, "array")) {
            return ["array", self::resolveDocType($className, $valueName, $valueType)];
        }

        return [$valueType, self::resolveDocType($className, $valueName, $valueType)];
    }

    public static function buildBitwiseOr(array $references, mixed $right = null): null|BitwiseOr|ClassConstFetch
    {
        if (empty($references)) {
            return $right;
        }

        $result = array_shift($references);

        while (!empty($references)) {
            $next = array_shift($references);
            $result = new BitwiseOr($result, $next);
        }

        if ($right !== null) {
            $result = new BitwiseOr($result, $right);
        }

        return $result;
    }

    public static function guessTypeFromValue(mixed $enumValue): string
    {
        if (is_int($enumValue) || is_float($enumValue)) {
            return 'int';
        }

        if (is_string($enumValue)) {
            if (is_numeric($enumValue)) {
                return 'int';
            }

            if (str_starts_with($enumValue, '(')) {
                return 'int';
            }

            return 'string';
        }

        throw new \RuntimeException('Could not guess type from value');
    }

    /**
     * @return array{string, string} [0] = camelCase, [1] = original
     */
    public static function normalizeName(string $name): array
    {
        return [
            u($name)->camel()->toString(),
            $name
        ];
    }

    public static function isOptional(bool $optional, string $description): bool
    {
        if ($optional) {
            return true;
        }

        // "Can be null"
        // "`null` if"
        // "else `null`"
        if (str_contains($description, 'null')) {
            return true;
        }

        return false;
    }

    private static function resolveDocType(string $className, string $valueName, string $default): string
    {
        return self::DOC_TYPE_MAPPING[$className][$valueName] ?? $default;
    }

    public static function isNativeBuiltInType(string $type): bool
    {
        return in_array($type, [
            'int',
            'float',
            'string',
            'bool',
            '?int',
            '?float',
            '?string',
            '?bool',
        ]);
    }
}
