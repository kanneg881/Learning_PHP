<?php
// 使用原來 cookie 值，如果原來沒有 cookie 的話，就設定為 0
/** @var string $cookieC cookie c 值 */
$cookieC = $_COOKIE['c'] ?? 0;
// 遞增1
$cookieC++;
// 將新的 cookie 放入 response 中
setcookie('c', $cookieC);
// 告訴使用者 cookie 值
print "Cookies：" . count($_COOKIE) . "\n";

foreach ($_COOKIE as $key => $value) {
    print "{$key}：$value\n";
}
