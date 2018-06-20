<?php
/** @var array $prices 價錢 */
$prices = [5.95, 3.00, 12.50];
/** @var int $totalPrice 總價 */
$totalPrice = 0;
/** @var float $taxRate 8% 的稅 */
$taxRate = 1.08;

foreach ($prices as $price) {
    $totalPrice = $price * $taxRate;
}

printf('總價格(含稅)：$%.2f', $totalPrice);
