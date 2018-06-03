<?php
// 如果 PDO 的建構子出錯的話會丟出例外
try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
} catch (PDOException $exception) {
    print "無法連線：" . $exception->getMessage();
}
/** @var int $result 資料庫執行結果 */
$result = $pdo->exec("INSERT INTO dishes (dish_size, dish_name, price, is_spicy)
                         VALUES ('大', '芝麻泡芙', 2.50, 0)");

if (false === $result) {
    /** @var array $error pdo 錯誤訊息 */
    $error = $pdo->errorInfo();
    print "無法插入！\n";
    print "SQL 錯誤={$error[0]}，資料庫錯誤={$error[1]}，訊息={$error[2]}\n";
}
