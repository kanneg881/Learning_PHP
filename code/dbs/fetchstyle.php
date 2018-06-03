<?php

/** @var bool|PDOStatement $query 回傳數值陣列 */
$query = $database->query('SELECT dish_name, price FROM dishes');

while ($row = $query->fetch(PDO::FETCH_NUM)) {
    print implode(', ', $row) . "\n";
}

/** @var bool|PDOStatement $query 回傳物件，用取得屬性的方法取得值 */
$query = $database->query('SELECT dish_name, price FROM dishes');

while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    print "{$row->dish_name} 價格為 {$row->price}\n";
}
