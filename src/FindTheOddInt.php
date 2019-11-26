<?php

/**
 * @link https://www.codewars.com/kata/54da5a58ea159efa38000836
 */

namespace Saundefined\CodeWars;

class FindTheOddInt
{
    public static function solution(array $seq): int
    {
        return key(array_filter(array_count_values($seq), static function ($item) {
            return $item % 2 !== 0;
        }));
    }
}
