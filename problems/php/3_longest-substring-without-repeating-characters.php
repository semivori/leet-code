<?php

/**
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/
 * 
 * Good solution
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/discuss/495181
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        /**
         * ITS DOESNT WORK :)
         */
        if ($s === "") {
            return 0;
        }

        $max = null;
        $current = 0;
        $u = [];
        $a = str_split($s);

        foreach ($a as $i) {
            if (in_array($i, $u)) {
                $sub = $this->lengthOfLongestSubstring(
                    substr(
                        stristr($s, $i),
                        1
                    )
                );

                if ($sub > $current) {
                    $current = $sub;
                }

                if ($current > $max) {
                    $max = $current;
                }

                $current = 0;
                $u = [];
            }

            $current++;
            $u[] = $i;
        }

        if ($max === null || $max < $current) {
            return $current;
        }

        return $max;
    }
}
