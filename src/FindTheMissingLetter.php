<?php

/**
 * @link https://www.codewars.com/kata/5839edaa6754d6fec10000a2
 */

namespace Saundefined\CodeWars;

class FindTheMissingLetter
{
    public static function solution(array $array): string
    {
        $firstLetter = current($array);
        $lastLetter = end($array);
        $trueArray = range($firstLetter, $lastLetter);

        return current(array_diff($trueArray, $array));
    }
}
