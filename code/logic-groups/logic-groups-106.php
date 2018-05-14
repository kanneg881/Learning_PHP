<?php
/**
 * 付款方式
 *
 * @param float $cashOnHand 身上的現金
 * @param float $amount 總金額
 * @return string 付款方式
 */
function paymentMethod($cashOnHand, $amount)
{
    if ($amount > $cashOnHand) {
        return '信用卡';
    } else {
        return '現金';
    }
}