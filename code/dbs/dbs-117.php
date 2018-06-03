<?php
/** @var PDOStatement $statement PDO 預聲明 */
$statement = $database->prepare('INSERT INTO dishes (dish_name) VALUES (?)');
$statement->execute(array($_POST['new_dish_name'],));