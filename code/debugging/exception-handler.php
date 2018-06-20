<?php

/**
 * 客製的例外處理函式
 *
 * @param Exception $exception 例外
 */
function niceExceptionHandler(Exception $exception): void
{
    // 告訴使用者有位處理的例外
    print "抱歉！發生了未預期的事情。請稍後再試。";
    // 將詳細的例外資訊寫到紀錄檔中，讓系統管理者知道發生了什麼事
    error_log("{$exception->getMessage()} 在 {$exception->getFile()} @ {$exception->getLine()}");
    error_log($exception->getTraceAsString());
}

set_exception_handler('niceExceptionHandler');

print "我即將連接到一個偽裝，假裝，破壞的數據庫！\n";

/** @var PDO $database 故意傳一個不合法的參數 DSN 的 PDO，藉此製造出一個例外 */
$database = new PDO('garbage:this is obviously not going to work!');

print "這不會被印出。";
