<?php 
/** @var resource $curl 從 server 頁面拿取回 cookie */
$curl = curl_init('http://localhost:8888/Learning_PHP/code/net/cookie-server.php');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 指定將 cookie 的值存到同目錄下的 saved.cookies 檔案中
curl_setopt($curl, CURLOPT_COOKIEJAR, __DIR__ . '/saved.txt');
// 同目錄下的 saved.cookies 檔案中讀取 cookies（如果之前有存的話）
curl_setopt($curl, CURLOPT_COOKIEFILE, __DIR__ . '/saved.txt');

/** @var mixed $result 執行的請求將包含檔案中的 cookie 內容（如果有的話） */
$result = curl_exec($curl);
print $result;
