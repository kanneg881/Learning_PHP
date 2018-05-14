<?php
/** @var float $total 總金額 */
$total = restaurantCheck(15.22, 8.25, 15);
/** @var string $method 付款方式 */
$method = paymentMethod(20, $total);
print '我會使用' . $method . "付款";