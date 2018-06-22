<?php
/** @var bool|string $restaurantCheckTest3 RestaurantCheckTest3.php 內容 */
$restaurantCheckTest3 = trim(file_get_contents('RestaurantCheckTest3.php'));
/** @var bool|string $restaurantCheckTest4Frag RestaurantCheckTest4-frag 內容 */
$restaurantCheckTest4Frag = file_get_contents('RestaurantCheckTest4-frag.php');

$restaurantCheckTest3 = trim($restaurantCheckTest3, '}') . $restaurantCheckTest4Frag
    . PHP_EOL . '}';

file_put_contents('RestaurantCheckTest4.php', $restaurantCheckTest3);
