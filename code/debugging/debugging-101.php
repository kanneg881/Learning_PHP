<?php
// 開始抓取接下來的 print 內容
ob_start();
// 如往常一般呼叫 var_dump()
var_dump($_POST);
/** @var string $output 將抓取的內容存到 $output */
$output = ob_get_contents();
// 恢復原來的 print 輸出
ob_end_clean();
// 將 $output 送到紀錄檔
error_log($output);