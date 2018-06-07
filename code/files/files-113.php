<?php
/** @var bool|string $filename 檔案名稱 */
$filename = realpath("/usr/local/data/$_POST[user]");

// 確認 $filename 是在 /usr/local/data 目錄下
if (('/usr/local/data/' == substr($filename, 0, 16)) &&
    is_readable($filename)) {
    print '使用者個人資料 ' . htmlentities($_POST['user']) . '：<br/>';
    print file_get_contents($filename);
} else {
    print "輸入無效的使用者。";
}
