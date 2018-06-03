<?php
try {
    /** @var PDO $database 餐廳資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (PDOException $exception) {
    print "無法連線：" . $exception->getMessage();
    exit();
}
// 在資料庫錯誤上設置例外
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
