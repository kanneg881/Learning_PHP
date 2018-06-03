<?php
/** @var string $dish 首先，對值做一般的 quote 動作 */
$dish = $database->quote($_POST['dishName']);
// 然後把反斜線放在底線與百分比符號前面
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
// 於是 $dish 就 ok 可以使用囉
$database->exec("UPDATE dishes SET price = 1 WHERE dish_name LIKE $dish");
