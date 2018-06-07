<?php
/** @var bool|string $page 檔案內容 */
$page = file_get_contents('page-template.html');

// 注意在判斷式中是3個等於符號
if ($page !== false) {
    // ... 進行正常處理
} else {
    print "無法載入樣板：$php_errormsg";
}
