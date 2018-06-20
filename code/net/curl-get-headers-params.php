<?php

/** @var array $params query 字串裡不指定任何格式資訊 */
$params = [
    'api_key' => NDB_API_KEY,
    'q' => 'black pepper',
];
/** @var string $url 網址 */
$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);
/** @var resource $curl curl 資源 */
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json',]);

print curl_exec($curl);
