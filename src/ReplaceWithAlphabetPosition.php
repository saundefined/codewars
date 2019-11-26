<?php

/**
 * @link https://www.codewars.com/kata/546f922b54af40e1e90001da
 */

namespace Saundefined\CodeWars;

class ReplaceWithAlphabetPosition
{
    public static function solution(string $s): string
    {
        $abc = array_flip(range('a', 'z'));
        $output = [];
        foreach (str_split($s) as $letter) {
            $letter = mb_strtolower($letter);

            if (isset($abc[$letter])) {
                $output[] = $abc[$letter] + 1;
            }
        }

        return implode(' ', $output);
    }
}
