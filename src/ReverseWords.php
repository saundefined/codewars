<?php

/**
 * @link https://www.codewars.com/kata/5259b20d6021e9e14c0010d4
 */

namespace Saundefined\CodeWars;

class ReverseWords
{
    public static function solution(string $str): string
    {
        $output = [];
        foreach (explode(' ', $str) as $word) {
            $output[] = implode(array_reverse(str_split($word)));
        }

        return implode(' ', $output);
    }
}
