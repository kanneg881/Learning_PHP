<?php
/** @var PDO $database 餐廳資料庫 */
$database = new PDO('sqlite:/tmp/restaurant.db');
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $database->exec('DROP TABLE dishes');
} catch (Exception $exception) {
}

$database->exec(file_get_contents(__DIR__ . '/dbs-134.sql'));

foreach (file(__DIR__ . '/dbs-15.sql') as $sql) {
    $database->exec(trim($sql));
}
