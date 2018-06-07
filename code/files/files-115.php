<?php
/**
 * @var string $line 每一行內容
 */
foreach (file('people.txt') as $line) {
    $line = trim($line);
    /** @var array $info 檔案資料 */
    $info = explode('|', $line);

    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . "</li>\n";
}
