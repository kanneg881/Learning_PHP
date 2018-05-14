<?php
/**
 * 完成帳單
 *
 * @param float $meal 餐點費用
 * @param float $tax 稅率
 * @param float $tip 小費
 * @param float $cashOnHand 身上的現金
 * @return bool|float 不行完成帳單回傳假，否則回傳總金額
 */
function completeBill($meal, $tax, $tip, $cashOnHand)
{
    /** @var float $taxAmount 稅額 */
    $taxAmount = $meal * ($tax / 100);
    /** @var float $tipAmount 小費金額 */
    $tipAmount = $meal * ($tip / 100);
    /** @var float $totalAmount 總金額 */
    $totalAmount = $meal + $taxAmount + $tipAmount;
    if ($totalAmount > $cashOnHand) {
        // 我們身上的錢不夠支付這筆帳單
        return false;
    } else {
        // 我們身上的錢足夠支付這筆帳單
        return $totalAmount;
    }
}

/** @var bool|float $total */
if ($total = completeBill(15.22, 8.25, 15, 20)) {
    print "我很高興付{$total}。";
} else {
    print "我沒有足夠的錢。我應該洗一些盤子嗎？";
}