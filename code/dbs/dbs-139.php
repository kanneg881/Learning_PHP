<?php
/** @var bool|PDOStatement $statement PDO 聲明 */
$statement = $database->prepare('UPDATE dishes 
                                SET price = 1 WHERE dish_name LIKE ?');
$statement->execute(array($_POST['dishName']));