<?php
try {
    /** @var PDO $database PDO 資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
    exit();
}

/** @var bool|resource $file 打開 dishes.txt 準備寫出 */
$file = fopen('/usr/local/dishes.txt', 'wb');

if (!$file) {
    print "打開dishes.txt時錯誤：$php_errormsg";
} else {
    /** @var bool|PDOStatement $query PDO 聲明 */
    $query = $database->query("SELECT dish_name, price FROM dishes");

    while ($row = $query->fetch()) {
        // 將資料一行行（每行結尾都換行）寫出到 dishes.txt
        fwrite($file, "$row[0] 的價格是 $row[1]\n");
    }

    if (!fclose($file)) {
        print "關閉dishes.txt時錯誤：$php_errormsg";
    }
}
