<?php
/** @var PDOStatement $statement PDO 預聲明 */
$statement = $database->prepare('INSERT INTO dishes (dish_name,price,is_spicy)
 VALUES (?, ?, ?)');
$statement->execute(array(
    $_POST['new_dish_name'],
    $_POST['new_price'],
    $_POST['is_spicy'],
));
