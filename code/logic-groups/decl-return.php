<?php
/**
 * 餐廳檢查
 *
 * @param int $meal 餐點
 * @param float $tax 稅率
 * @param float $tip 小費費率
 * @return float 總金額
 */
function restaurantCheck($meal, $tax, $tip): float
{
    /** @var float $taxAmount 稅額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費金額 */
    $tipAmount = $meal * ($tip / 100);
    /** @var float $totalAmount 總金額 */
    $totalAmount = $meal + $taxAmount + $tipAmount;

    return $totalAmount;
}