<?php
/** @var float $price 價錢 */
$price = 3.95;
/** @var float $taxRate 稅率 */
$taxRate = 0.08;
/** @var float $taxAmount 稅價 */
$taxAmount = $price * $taxRate;
/** @var float $totalCost 總計 */
$totalCost = $price + $taxAmount;

/** @var string $userName 使用者名稱 */
$userName = 'james';
/** @var string $domain 網域 */
$domain = '@example.com';
/** @var string $emailAddress 電子郵件位址 */
$emailAddress = $userName . $domain;

print '稅價為 ' . $taxAmount;
// 這會輸出換行符
print "\n";
print '總計為 ' . $totalCost;
// 這會輸出換行符
print "\n";
print $emailAddress;
