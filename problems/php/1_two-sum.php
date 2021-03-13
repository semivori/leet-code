<?php

/**
 * https://leetcode.com/problems/two-sum/
 */

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        return $this->doubleCycle($nums, $target);
        //return $this->arrSeacrh($nums, $target);       
    }

    function doubleCycle($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$j] == $target - $nums[$i]) {
                    return [$i, $j];
                }
            }
        }
    }

    function arrSeacrh($nums, $target)
    {
        foreach ($nums as $key => $num) {
            $second = $target + ($num * -1);
            $secondKey = array_search($second, $nums);

            //var_dump($key, $num, $second, $secondKey);
            if ($secondKey !== false && $key != $secondKey) {
                if ($secondKey === 0) {
                    if ($second == $nums[$secondKey]) {
                        return [$key, json_encode($secondKey)];
                    }
                }
                if ($key) {
                    return [$key, json_encode($secondKey)];
                }
            }
        }
    }
}
