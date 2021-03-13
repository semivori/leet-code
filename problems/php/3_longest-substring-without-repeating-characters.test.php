<?php

require_once(dirname(__FILE__).'/3_longest-substring-without-repeating-characters.php');

$s = new Solution();

$tests = [
    [
        "abcabcbb",
        3,
    ],
    [
        "bbbbb",
        1,
    ],
    [
        "pwwkew",
        3,
    ],
    [
        "",
        0,
    ],
    [
        " ",
        1,
    ],
    [
        "aab",
        2
    ],
    [
        "dvdf",
        3,
    ],
    [
        "twcqqxfbbfhbadvfuaaujxfrwkvuuhepdifvfkyhsfiuleafg",
        10,
    ],
    [
        "abba",
        2
    ]
];

foreach ($tests as $test) {
    $res = $s->lengthOfLongestSubstring($test[0]);
    $status = $res === $test[1] ? "Success!" : "Fail!\t";

    echo "$status expected: {$test[1]}, output: $res, input: ";
    printf("\"%s\"", $test[0]);
    echo "\n";
}
