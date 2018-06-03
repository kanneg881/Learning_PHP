<?php
/** @var bool|PDOStatement $statement PDO 聲明 */
$statement = $database->prepare('SELECT dish_name, price FROM dishes
                      WHERE dish_name LIKE ?');
$statement->execute(array($_POST['dishSearch']));

while ($row = $statement->fetch()) {
    // ... 在這裡操作 $row 中的資料 ...
}
