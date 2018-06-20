<?php
/** @var resource $curl curl 資源 */
$curl = curl_init('http://numbersapi.com/09/27');
// 告訴 cURL 不要立即印出 response 的內容，而是用字串回傳
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
/** @var mixed $fact 執行 request */
$fact = curl_exec($curl);
?>
Did you know that <?= $fact ?>
