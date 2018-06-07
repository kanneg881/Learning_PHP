<?php
/** @var string $logFile 記錄檔 */
$logFile = '/var/log/users.log';

if (is_writeable($logFile)) {
    /** @var bool|resource $file 檔案 */
    $file = fopen($logFile, 'ab');
    fwrite($file, $_SESSION['username'] . ' 在 ' . strftime('%c') . "\n");
    fclose($file);
} else {
    print "無法寫入日誌檔案。";
}