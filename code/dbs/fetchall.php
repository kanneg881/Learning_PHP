<?php
/** @var PDOStatement $query */
$query = $database->query('SELECT dish_name, price FROM dishes');
/** @var array $rows 一個具有四個元素的陣列，每個元素就是一個資料列 */
$rows = $query->fetchAll();
