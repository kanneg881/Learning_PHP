<?php
/** @var bool|resource $file 檔案 */
$file = fopen('people.txt', 'rb');

if (!$file) {
    print "打開 people.txt 時出錯：$php_errormsg";
} else {
    while (!feof($file)) {
        /** @var bool|string $line 每一行內容 */
        $line = fgets($file);

        if ($line !== false) {
            $line = trim($line);
            /** @var array $info 資訊 */
            $info = explode('|', $line);
            print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . "</li>\n";
        }
    }
    if (!fclose($file)) {
        print "關閉 people.txt 時出錯：$php_errormsg";
    }
}
