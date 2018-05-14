<?php
/**
 * 餐廳金額計算2
 *
 * @param int $meal 餐點
 * @param float $tax 稅率
 * @param float $tip 小費
 * @return array 總金額不包含小費和包含小費
 */
function restaurantCheck2($meal, $tax, $tip)
{
    /** @var float $taxAmount 稅額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費金額 */
    $tipAmount = $meal * ($tip / 100);
    /** @var float $totalNoTip 總金額不包含小費 */
    $totalNoTip = $meal + $taxAmount;
    /** @var float $totalTip 總金額包含小費 */
    $totalTip = $meal + $taxAmount + $tipAmount;

    return array($totalNoTip, $totalTip);
}