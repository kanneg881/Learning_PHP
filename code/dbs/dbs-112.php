<?php
/** @var int $count 改變菜的價格 */
$count = $database->exec("UPDATE dishes SET price = price + 5 WHERE price > 3");
print '更改了 ' . $count . ' 列價格。';