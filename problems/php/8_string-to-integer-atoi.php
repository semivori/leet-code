<?php

/**
 * https://leetcode.com/problems/string-to-integer-atoi/
 */

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        /**
         * Simplest way is
         * return (int)$s;
         */

        $chars = str_split(trim($s));

        if (!preg_match("/[\-|\+|\d]/", $chars[0])) {
            return 0;
        }

        $sign = $chars[0] == '-' ? -1 : 1;

        if ($chars[0] == '-' || $chars[0] == '+') {
            array_shift($chars);
        }

        $number = "";

        foreach ($chars as $char) {
            if (is_numeric($char)) {
                $number .= $char;
            } else {
                break;
            }
        }

        $number = $sign * $number;

        if ($number > 2147483647) { // max 32-bit int
            return 2147483647;
        } else if ($number < -2147483648) { // min 32-bit int
            return -2147483648;
        }

        return $number;
    }
}
