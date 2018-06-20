<?php
/** @var array $params 網址參數 */
$params = [
    'api_key' => NDB_API_KEY,
    'q' => 'black pepper',
    'format' => 'json'
];
/** @var string $url 網址 */
$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);


