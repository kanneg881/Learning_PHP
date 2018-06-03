<?php
/** @var string $dish 首先，做單引號置換 */
$dish = $database->quote($_POST['dishSearch']);
// 然後，把底線跟百分比號前面加上反斜線
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
/** @var bool|PDOStatement $statement 好了，$dish 現在可以使用了 */
$statement = $database->query("SELECT dish_name, price FROM dishes
                    WHERE dish_name LIKE $dish");
