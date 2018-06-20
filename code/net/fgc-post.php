<?php
/** @var string $url 網址 */
$url = 'http://localhost:8888/Learning_PHP/code/net/post-server.php';

// Two variables to send via
/** @var array $formData 藉由 POST 送出2兩個變數 */
$formData = [
    'name' => 'black pepper',
    'smell' => 'good',
];
/** @var array $options 設定 method、Content-Type 以及 content */
$options = [
    'method' => 'POST',
    'header' => 'Content-Type: application/x-www-form-urlencoded',
    'content' => http_build_query($formData)
];
/** @var resource $context 為 http 串流設定串流內容 */
$context = stream_context_create(['http' => $options]);

// 將 context 作為第三個參數傳入 file_get_contents。
print file_get_contents($url, false, $context);
