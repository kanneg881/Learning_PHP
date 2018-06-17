<?php 
/** @var resource $curl 指定要取回 cookie 的 server 頁面，且不傳送 cookies */
$curl = curl_init('http://localhost:8888/Learning_PHP/code/net/cookie-server.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
/** @var mixed $result 第一次結果，沒有 cookie */
$result = curl_exec($curl);

print $result;

// 第二次結果，也沒有 cookie
$result = curl_exec($curl);

print $result;
