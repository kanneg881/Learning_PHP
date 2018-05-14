<?php
/**
 * 餐廳檢查
 *
 * @param float $meal 餐費
 * @param float $tax 稅率
 * @param float $tip 小費費率
 * @return float 總金額
 */
function restaurantCheck(float $meal, float $tax, float $tip): float
{
    /** @var float $taxAmount 稅額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費金額 */
    $tipAmount = $meal * ($tip / 100);

    return $meal + $taxAmount + $tipAmount;
}
/** @var float $cashOnHand 身上的現金 */
$cashOnHand = 31;
/** @var float $meal 餐費 */
$meal = 25;
/** @var float $tax 稅率 */
$tax = 10;
/** @var float $tip 小費 */
$tip = 10;

while (($cost = restaurantCheck($meal, $tax, $tip)) < $cashOnHand) {
    $tip++;
    print "我可以支付$tip%的小費($cost)\n";
}
