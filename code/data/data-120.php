<?php
/** @var int $price 價錢 */
$price = 5;
/** @var float $tax 稅 */
$tax = 0.075;
printf('這道菜花費 $%.2f', $price * (1 + $tax));