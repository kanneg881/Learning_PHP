<?php
/** @var string $userName 使用者名稱 */
$userName = 'james';
/** @var string $domain 網域 */
$domain = '@example.com';

// 一般將 $username 與 $domain 連接起來的方法
$userName = $userName . $domain;
// 合併兩個運算子使用
$userName .= $domain;