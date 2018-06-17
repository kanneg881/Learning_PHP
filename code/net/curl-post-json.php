<?php
/** @var string $url 網址 */
$url = 'http://php7.example.com:7000/post-server.php';

/** @var array $formData POST 時用 JSON 格式傳送兩個變數 */
$formData = [
    'name' => 'black pepper',
    'smell' => 'good',
];
/** @var resource $curl curl 資源 */
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 指定要做 POST request
curl_setopt($curl, CURLOPT_POST, true);
// 指定請求內容是 JSON 格式
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json',]);
// 指定要傳送的資料，並加以格式化
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($formData));

print curl_exec($curl);
