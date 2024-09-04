<?php

class Validator
{
    public static function isTextLenValid($value, $min = 2, $max = INF): bool
    {
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function isTxtEmpty($value): bool
    {
        return strlen($value) === 0;
    }

    public static function isAgeValid($value): bool
    {
        return $value >= 18 && $value <= 120;
    }
}