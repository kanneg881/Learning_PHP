<?php
if ($loggedIn) {
    // 如果 $loggedIn 為真時執行此行
    print "歡迎登機，可信用户。";
} elseif ($newMessages) {
    // $loggedIn 為假但 $newMessages 為真時執行此行
    print "親愛的陌生人，有新的訊息。";
} elseif ($emergency) {
    /**
     * $loggedIn 跟 $newMessages 都是假，
     * 但 $emergency 為真時執行此行
     */
    print "陌生人，沒有新訊息，但有緊急事件。";
}