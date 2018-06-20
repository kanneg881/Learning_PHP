<?php

/** @var resource $curl 故意設定一個不存在的位置 */
$curl = curl_init('http://api.example.com');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
/** @var mixed $result curl 結果 */
$result = curl_exec($curl);
/** @var mixed $info 不管是不是成功，都取得連線資訊 */
$info = curl_getinfo($curl);

// 當連線出錯時
if ($result === false) {
    print "錯誤 #" . curl_errno($curl) . "\n";
    print "哎喲！cURL說：" . curl_error($curl) . "\n";
}
elseif ($info['http_code'] >= 400) {
    // HTTP 回應代碼在大於400時代表有錯誤發生
    print "伺服器說 HTTP 錯誤 {$info['http_code']}。\n";
} else {
    print "成功的結果！\n";
}
// 裝載連線資訊的陣列裡也有包括時間的統計值
print "順便一提，這個請求花了 {$info ['total_time']} 秒。\n";
