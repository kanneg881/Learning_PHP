<?php
/**
 * 餐廳檢查
 *
 * @param int $meal 餐點
 * @param float $tax 稅率
 * @param float $tip 小費費率
 * @return float 總金額
 */
function restaurantCheck(int $meal, float $tax, float $tip): float
{
    /** @var float $taxAmount 稅額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費金額 */
    $tipAmount = $meal * ($tip / 100);
    /** @var float $totalAmount 總金額 */
    $totalAmount = $meal + $taxAmount + $tipAmount;

    return $totalAmount;
}

/**
 * 付款方式
 *
 * @param float $cashOnHand 身上的現金
 * @param float $amount 總金額
 * @return string 付款方式
 */
function paymentMethod(float $cashOnHand, float $amount): string
{
    if ($amount > $cashOnHand) {
        return '信用卡';
    } else {
        return '現金';
    }
}
