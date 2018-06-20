<?php
/** @var array $responseData 回應資料 */
$responseData = ['now' => time(),];
header('Content-Type: application/json');
print json_encode($responseData);
