<?php
/** @var array $totals 總金額明細 */
$totals = restaurantCheck2(15.22, 8.25, 15);

if ($totals[0] < 20) {
    print '沒有小費的總金額少於20元。';
}

if ($totals[1] < 20) {
    print '有小費的總金額少於20元。';
}