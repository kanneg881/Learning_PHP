<?php
/** @var bool|PDOStatement $query PDO 查詢 */
$query = $database->query('SELECT dish_name, price FROM dishes');
// 不需要傳參數到 fetch() 因為 setFetchMode() 可以搞定
$query->setFetchMode(PDO::FETCH_NUM);

while ($row = $query->fetch()) {
    print implode(', ', $row) . "\n";
}
