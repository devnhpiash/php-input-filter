<?php

namespace Nhpiash\InputFilter;

class InputFilter
{
    public static function getString($input): ?string
    {
        return is_string($input) ? htmlspecialchars(trim(strip_tags($input))) : null;
    }

    public static function getInt($input): int|false
    {
        return filter_var($input, FILTER_VALIDATE_INT);
    }

    public static function getEmail($input): string|false
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

    public static function getSanitizedEmail($input): ?string
    {
        return is_string($input) ? filter_var($input, FILTER_SANITIZE_EMAIL) : null;
    }

    public static function getURL($input): string|false
    {
        return filter_var($input, FILTER_VALIDATE_URL);
    }

    public static function getSanitizedURL($input): ?string
    {
        return is_string($input) ? filter_var($input, FILTER_SANITIZE_URL) : null;
    }

    public static function getBoolean($input): bool
    {
        return filter_var($input, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? false;
    }

    public static function getFilteredArray(array $array, string $type): array
    {
        $filtered = [];
        foreach ($array as $key => $value) {
            switch ($type) {
                case 'string':
                    $filtered[$key] = self::getString($value);
                    break;
                case 'int':
                    $filtered[$key] = self::getInt($value);
                    break;
                case 'email':
                    $filtered[$key] = self::getEmail($value);
                    break;
                case 'url':
                    $filtered[$key] = self::getURL($value);
                    break;
                case 'boolean':
                    $filtered[$key] = self::getBoolean($value);
                    break;
                default:
                    $filtered[$key] = $value;
            }
        }
        return $filtered;
    }
}
?>