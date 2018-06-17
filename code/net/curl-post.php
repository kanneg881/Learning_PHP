<?php
/** @var string $url 網址 */
$url = 'http://php7.example.com:7000/post-server.php';

/** @var array $formData 用 POST 送出兩個變數 */
$formData = [
    'name' => 'black pepper',
    'smell' => 'good',
];
/** @var resource $curl curl 資源 */
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 表示這是一個 POST request
curl_setopt($curl, CURLOPT_POST, true);
// This is the data to send
curl_setopt($curl, CURLOPT_POSTFIELDS, $formData);

print curl_exec($curl);
