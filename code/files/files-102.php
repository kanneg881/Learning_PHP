<?php
try {
    /** @var PDO $database PDO 資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
    exit();
}
/** @var bool|resource $file 開啟準備要寫出的 CSV 檔 */
$file = fopen('dish-list.csv','wb');
/** @var bool|PDOStatement $dishes 菜 */
$dishes = $database->query('SELECT dish_name, price, is_spicy FROM dishes');

while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
    // 把 $row 中的資料以 CSV 格式的字串寫出，fputcsv() 會在尾端加入換行符號
    fputcsv($file, $row);
}
fclose($file);
