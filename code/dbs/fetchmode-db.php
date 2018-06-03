<?php

// 不用呼叫 setFetchMode() 也不用傳遞參數給 fetch()
// 用  setAttribute() 搞定一切
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);

/** @var bool|PDOStatement $query PDO 查詢 */
$query = $database->query('SELECT dish_name, price FROM dishes');

while ($row = $query->fetch()) {
    print implode(', ', $row) . "\n";
}

/** @var bool|PDOStatement $anotherQuery PDO 查詢 */
$anotherQuery = $database->query('SELECT dish_name FROM dishes WHERE price < 5');
/** @var array $moreDishes 每個在 $moreDishes 中的子陣列也是數值陣列（數值鍵） */
$moreDishes = $anotherQuery->fetchAll();
