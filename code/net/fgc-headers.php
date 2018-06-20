<?php

/** @var array $params 只組裝 query 字串，這裡不再指定格式 */
$params = [
    'api_key' => NDB_API_KEY,
    'q' => 'black pepper',
];
/** @var string $url 網址 */
$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);

/** @var array $options 由頁標頭的 Content-Type 作設定 */
$options = ['header' => 'Content-Type: application/json',];
/** @var resource $context 為 http 串流指定串流內容 */
$context = stream_context_create(['http' => $options]);

// 將做成的串流內容指定到 file_get_contents 函式的第三個參數
print file_get_contents($url, false, $context);
