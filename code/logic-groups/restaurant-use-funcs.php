<?php
require 'restaurant-functions.php';

/** @var float $totalBill 消費 $25 元，加8.875稅，再加 20% 小費 */
$totalBill = restaurantCheck(25, 8.875, 20);

/** @var int $cash 身上現金一共有 $30 元 */
$cash = 30;

print "我需要使用" . paymentMethod($cash, $totalBill) . "付款";
