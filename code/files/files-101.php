<?php
try {
    /** @var PDO $database PDO 資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
    exit();
}
/** @var bool|resource $file 檔案 */
$file = fopen('dishes.csv', 'rb');
/** @var bool|PDOStatement $statement PDO 聲明 */
$statement = $database->prepare('INSERT INTO dishes (dish_name, price, is_spicy) 
                                VALUES (?,?,?)');

/**
 * @var array|false|null $info csv檔資訊
 */
while (!feof($file) && $info = fgetcsv($file)) {
    /**
     * $info[0] 是 dish name 欄位        (dishes.csv的第一個欄位)
     * $info[1] 是 price 欄位            (第二個欄位)
     * $info[2] 是 spicy status 欄位     (第三個欄位)
     * 在資料表中新增一行紀錄
     */
    $statement->execute($info);
    print "新增 $info[0]\n";
}
// 關閉檔案
fclose($file);
