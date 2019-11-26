<?php

/**
 * @link https://www.codewars.com/kata/sort-and-star/
 */

namespace Saundefined\CodeWars;

class SortAndStar
{
    public static function solution(array $s): string
    {
        sort($s);

        return implode('***', str_split(array_shift($s)));
    }
}
