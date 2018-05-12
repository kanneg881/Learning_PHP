<?php
/** @var array $prices 價錢 */
$prices['晚餐']['甜玉米和蘆筍'] = 12.50;
$prices['午餐']['腰果和白蘑菇'] = 4.95;
$prices['晚餐']['紅燒竹菇'] = 8.95;

$prices['晚餐']['總計'] = $prices['晚餐']['甜玉米和蘆筍'] + $prices['晚餐']['紅燒竹菇'];

/** @var array $specials 特價 */
$specials[0][0] = '栗子小圓麵包';
$specials[0][1] = '核桃小圓麵包';
$specials[0][2] = '花生小圓麵包';
$specials[1][0] = '板栗沙拉';
$specials[1][1] = '核桃沙拉';
/**
 * 在陣列最後一個元素故意不寫索引值
 * 下方述句會建立 $specials[1][2]
 */
$specials[1][] = '花生沙拉';