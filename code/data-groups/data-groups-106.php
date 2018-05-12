<?php
/** @var array $meals 餐點 */
$meals = array(
    '核桃小圓麵包' => 1,
    '腰果和白蘑菇' => 4.95,
    '桑椹乾' => 3.00,
    '茄子配辣椒醬' => 6.50,
    '泡芙蝦' => 0
);
/** @var string $dish 料理名稱 */
$dish = array_search(6.50, $meals);

if ($dish) {
    print "$dish 花費 \$6.50";
}