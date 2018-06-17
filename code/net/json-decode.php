<?php
/** @var array $params 網址參數 */
$params = [
    'api_key' => NDB_API_KEY,
    'q' => 'black pepper',
    'format' => 'json',
];
/** @var string $url 網址 */
$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);
/** @var bool|string $response 回應 */
$response = file_get_contents($url);
/** @var mixed $info 資訊 */
$info = json_decode($response);

foreach ($info->list->item as $item) {
    print "{$item-> name} 的 ndbno 是 {$item-> ndbno}。\n";
}
