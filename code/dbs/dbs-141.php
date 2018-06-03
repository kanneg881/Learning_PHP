<?php
try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /** @var int $result 資料庫執行結果 */
    $result = $pdo->exec("CREATE TABLE dishes (
        dish_id INT,
        dish_name VARCHAR(255),
        price DECIMAL(4,2),
        is_spicy INT)");
} catch (PDOException $exception) {
    print "無法創建資料表：" . $exception->getMessage();
}
