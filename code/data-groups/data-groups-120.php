<?php
/**
 * 這行讓 $vegetables 成為一個陣列
 *
 * @var mixed $vegetables 蔬菜
 */
$vegetables['玉米'] = '黃色';

// 這行會抹去陣列元素鍵值 "玉米" 與 "黃色"，並且讓 $vegetables 變成一個普通變數
$vegetables = '美味的';

/**
 * 這行讓 $fruits 成為一個普通變數
 *
 * @var mixed $fruits 水果
 */
$fruits = 283;

/**
 * 這行不是錯誤的 -- $fruits 仍然是 283
 * 而且 PHP 引擎會提示一個警告
 */
$fruits['鉀'] = '香蕉';

// 但這行會複寫 $fruits 並讓它變成一個陣列
$fruits = array('鉀' => '香蕉');
