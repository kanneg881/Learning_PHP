<?php
/**
 * 是否可以付現
 *
 * @param float $cashOnHand 身上的現金
 * @param float $amount 總金額
 * @return bool 可以回傳真，否則假
 */
function canPayCash($cashOnHand, $amount)
{
    if ($amount > $cashOnHand) {
        return false;
    } else {
        return true;
    }
}
/** @var float $total 總金額 */
$total = restaurantCheck(15.22, 8.25, 15);

if (canPayCash(20, $total)) {
    print "我可以付現。";
} else {
    print "是時候使用信用卡了。";
}