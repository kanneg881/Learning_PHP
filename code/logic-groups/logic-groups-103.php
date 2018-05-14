<?php
/**
 * 算出 $15.22 的肉加上 8.25% 的稅和 15% 的小費後的總金額
 *
 * @var float $total
 */
$total = restaurantCheck(15.22, 8.25, 15);

print '我只有20元的現金，所以...';
if ($total > 20) {
    print "我必須用我的信用卡支付。";
} else {
    print "我可以用現金支付。";
}