<?php

require_once(dirname(__FILE__) . '/2_add-two-numbers.php');

$inputs = [
    [
        [2, 4, 3], [5, 6, 4],
    ],
    [
        [0], [0],
    ],
    [ 
        [9,9,9,9,9,9,9], [9,9,9,9],
    ],
    [
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1], [5, 6, 4],
    ],
];

$lists = [];

foreach ($inputs as $input) {
    $length = count($input[0]) > count($input[1]) ? count($input[0]) : count($input[1]);

    $lists[] = [
        listFromArray($input[0]),
        listFromArray($input[1])
    ];
}

$s = new Solution();

foreach ($lists as $list) {
    $res = $s->addTwoNumbers($list[0], $list[1]);
    echo implode(" ", listToArray($res));
    echo "\n";
}

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function listFromArray($input, $length = null)
{
    $count = count($input);
    if ($count > $length) {
        $input = array_slice($input, 0, $length);
    } elseif ($length > $count) {
        $input = array_pad($input, $length, 0);
    }

    $first = new ListNode(array_shift($input));

    foreach ($input as $item) {
        listAddVal($first, $item);
    }

    return $first;
}

function listToArray(ListNode $list)
{
    $result = [];

    $last = $list;

    do {
        $result[] = $last->val;
        $last = $last->next;
    } while ($last);

    return $result;
}
