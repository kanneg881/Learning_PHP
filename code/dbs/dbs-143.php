<?php

try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /** @var int $affectedRows 資料庫執行結果 */
    $affectedRows = $pdo->exec("INSERT INTO dishes (dish_name, price, is_spicy)
                                    VALUES ('芝麻泡芙', 2.50, 0)");
} catch (PDOException $exception) {
    print "無法插入一筆資料：" . $exception->getMessage();
}
