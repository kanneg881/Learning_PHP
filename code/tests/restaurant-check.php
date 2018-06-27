<?php
/**
 * 計算帳單總額
 *
 * @param float $meal 餐費
 * @param float $tax 稅率
 * @param float $tip 小費
 * @return float 總額
 */
function restaurantCheck(float $meal, float $tax, float $tip): float
{
    /** @var float $taxAmount 稅金總額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費總額 */
    $tipAmount = $meal * ($tip / 100);
    /** @var float $totalAmount 總額 */
    $totalAmount = $meal + $taxAmount + $tipAmount;

    return $totalAmount;
}