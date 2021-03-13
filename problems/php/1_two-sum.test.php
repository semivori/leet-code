<?php

require_once(dirname(__FILE__) . '/1_two-sum.php');

$inputs = [
    [[2, 7, 11, 15], 9],
    [[3, 2, 4], 6],
    [[3, 3], 6],
    [[-2, -5, 7], 5]
];

$s = new Solution();
foreach ($inputs as $input) {
    $res = $s->twoSum($input[0], $input[1]);
    echo "res {$res[0]}, {$res[1]} \n";
}
