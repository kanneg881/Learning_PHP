<?php
/** @var bool|resource $file 檔案資源 */
$file = fopen('people.txt', 'rb');

/**
 * @var bool|string $line 每一行資料
 */
while (!feof($file) && $line = fgets($file)) {
    $line = trim($line);
    /** @var array $info 檔案資料 */
    $info = explode('|', $line);

    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . "</li>\n";
}

fclose($file);
