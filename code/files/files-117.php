<?php
try {
    /** @var PDO $database pdo 資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
    exit();
}
/** @var bool|resource $file 開啟 dishes.txt 準備寫出 */
$file = fopen('dishes.txt','wb');
/** @var bool|PDOStatement $query pdo 查詢 */
$query = $database->query("SELECT dish_name, price FROM dishes");

while($row = $query->fetch()) {
    // 將資料一行行(每行結尾都換行)寫出到dishes
    fwrite($file, "The price of $row[0] is $row[1] \n");
}
fclose($file);
