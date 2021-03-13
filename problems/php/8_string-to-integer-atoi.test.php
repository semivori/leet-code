<?php

require_once(dirname(__FILE__) . '/8_string-to-integer-atoi.php');

$tests = [
    [
        "42", 42
    ],
    [
        "   -42", -42
    ],
    [
        "4193 with words", 4193
    ],
    [
        "words and 987", 0
    ],
    [
        "-91283472332", -2147483648
    ],
    [
        "21474836460", 2147483647
    ],
];

$s = new Solution();

foreach ($tests as $test) {
    $res = $s->myAtoi($test[0]);
    $status = $res === $test[1] ? "Success!" : "Fail!\t";

    echo "$status expected: {$test[1]}, output: $res, input: ";
    printf("\"%s\"", $test[0]);
    echo "\n";
}
