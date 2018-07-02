<?php
/** @var string $zip 將要被搜尋天氣地區的郵遞區號 */
$zip = "98052";
/**
 * @noinspection SqlResolve
 * @var string $yql
 *
 * 用來搜尋天氣的YQL，需要更多訊息請看 https://developer.yahoo.com/weather/
 */
$yql = 'select item.condition from weather.forecast where woeid in ' .
    '(select woeid from geo.places(1) where text="' . $zip . '")';

/** @var array $parameters Yahoo! YQL 訪問端點需要的參數 */
$parameters = [
    "q" => $yql,
    "format" => "json",
    "env" => "store://datatables.org/alltableswithkeys"
];

/** @var string $url 建立 YQL 並附加訪問參數 */
$url = "https://query.yahooapis.com/v1/public/yql?" . http_build_query($parameters);
/** @var bool|string $response 發出 request */
$response = file_get_contents($url);
/** @var mixed $json 解碼回覆的 json */
$json = json_decode($response);
/** @var object $conditions 選擇巢狀 JSON 內包含需求資訊的物件 */
$conditions = $json->query->results->channel->item->condition;

// 印出天氣狀況
print "在 {$conditions->date} 是 {$conditions->temp} 度，" .
    "然後 {$conditions->text} 在 $zip\n";
