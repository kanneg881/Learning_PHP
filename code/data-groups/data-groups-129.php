<?php
/** @var array $meals 餐點 */
$meals = array(
    '核桃小圓麵包' => 1,
    '腰果和白蘑菇' => 4.95,
    '桑椹乾' => 3.00,
    '茄子配辣椒醬' => 6.50
);

foreach ($meals as $dish => $price) {
    // 寫 $price = $price * 2 是沒用的
    $meals[$dish] = $meals[$dish] * 2;
}

// 把改變後的元素值都印出來
foreach ($meals as $dish => $price) {
    printf("%s新價錢為 \$%.2f。\n", $dish, $price);
}