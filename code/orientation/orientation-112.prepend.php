<?php
$_POST['meal'] = '午餐';

/** @var PDO $database 使用 SQLite 資料庫名稱 'dinner.db' */
$database = new PDO('sqlite:dinner.db');
/** @var bool|PDOStatement $statement 取得相關該餐點的菜名 */
$statement = $database->prepare('SELECT dish,price FROM meals WHERE meal LIKE ?');

if ($statement === false) {
    $database->exec('CREATE TABLE meals (dish text, price int, meal text)');
    $database->exec("INSERT INTO meals VALUES ('蛋', 12, '午餐')");
}
unset($database);
unset($statement);
