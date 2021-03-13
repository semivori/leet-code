<?php

/**
 * https://leetcode.com/problems/add-two-numbers/
 * 
 * Good solution:
 * https://leetcode.com/problems/add-two-numbers/discuss/1066955/16ms-PHP-Solution
 */

function listAddVal(ListNode $list, $val)
{
    return listGetLast($list)->next = new ListNode($val);
}

function listGetLast(ListNode $list)
{
    $last = $list;

    while ($last->next) {
        $last = $last->next;
    }

    return $last;
}

class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $res = new ListNode();
        $carry = null;

        while ($l1 || $l2) {
            $sum = ($l1 ? $l1->val : 0) + ($l2 ? $l2->val : 0) + $carry;
            $l1 = $l1->next;
            $l2 = $l2->next;

            if ($carry === null) {
                $res->val = $sum % 10;
            } else {
                listAddVal($res, $sum % 10);
            }
            $carry = intdiv($sum, 10);
        };

        if ($carry) {
            listAddVal($res, $carry);
        }

        return $res;
    }
}
