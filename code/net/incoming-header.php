<?php
/** @var array $formats 能支援的格式種類 */
$formats = ['application/json', 'text/html', 'text/plain',];
/** @var string $defaultFormat 預設的格式 */
$defaultFormat = 'application/json';

// 接入命令所指定的格式是什麼呢？
if (isset($_SERVER['HTTP_ACCEPT'])) {
    foreach ($formats as $value) {
        if (strpos($_SERVER['HTTP_ACCEPT'], $value) !== false) {
            /** @var string $format 指定格式 */
            $format = $_SERVER['HTTP_ACCEPT'];
            break;
        }
    }

    if (!isset($format)) {
        /**
         * 如果指定了未支援的格式，那麼回傳錯誤
         * 406 代表"指定的格式無法支援"
         */
        http_response_code(406);
        // 這邊離開的話，代表沒有回應本文
        exit();
    }
} else {
    $format = $defaultFormat;
}
// 查出現在時間
$responseData = ['now' => time(),];
// 告訴客戶我們回應的格式是什麼
header("Content-Type: $format");

// 將時間轉為對應的格式
if (strpos($format, 'application/json') !== false) {
    print json_encode($responseData);
} elseif (strpos($format, 'text/html') !== false) {
    ?>
    <!doctype html>
    <html>
    <head>
        <title>時鐘</title>
    </head>
    <body>
    <time><?= date('c', $responseData['now']) ?></time>
    </body>
    </html>
    <?php
} elseif (strpos($format, 'text/plain') !== false) {
    print $responseData['now'];
}
