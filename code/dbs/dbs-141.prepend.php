<?php
try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
    $pdo->exec("DROP TABLE dishes");
} catch (Exception $exception) {
}

unset($pdo);
