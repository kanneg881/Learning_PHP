<?php
/** @var string $cmd 指令 */
$cmd = __DIR__ . '/../vendor/bin/phpunit RestaurantCheckTest4';
/** @var string $output 輸出 */
$output = `$cmd`;
$output = preg_replace("/Time: \d+ ms, Memory: \d+\.\d+MB/",
    "Time: 138 ms, Memory: 13.50MB", $output);
$output = preg_replace("/.+\/RestaurantCheckTest4.php/",
    "RestaurantCheckTest.php", $output);

print $output;