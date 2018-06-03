<?php
/** @var mixed $cheapestDishInfo 最便宜的菜資訊 */
$cheapestDishInfo = $database->query('SELECT dish_name, price
                                      FROM dishes ORDER BY price LIMIT 1')->fetch();
print "$cheapestDishInfo[0], $cheapestDishInfo[1]";
