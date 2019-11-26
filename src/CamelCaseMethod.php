<?php

/**
 * @link https://www.codewars.com/kata/camelcase-method/
 */

namespace Saundefined\CodeWars;

class CamelCaseMethod
{
    public static function solution(string $s): string
    {
        return implode(array_map(static function ($item) {
            return ucfirst(trim($item));
        }, explode(' ', $s)));
    }
}
