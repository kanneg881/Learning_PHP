<?php
session_start();

/** @var array $mainDishes 主要菜 */
$mainDishes = [
    '黃瓜' => '紅燒海參',
    '胃' => "炒豬胃",
    '肚' => '葡萄酒醬炒牛肚',
    '芋頭' => '芋頭燉豬肉',
    '內臟' => '烤鹽內臟',
    '鮑魚' => '鮑魚與骨髓和鴨腳',
];

if (isset($_SESSION['order']) && count($_SESSION['order']) > 0) {
    print '<ul>';

    foreach ($_SESSION['order'] as $order) {
        /** @var string $dishName 菜名 */
        $dishName = $mainDishes[$order['dish']];
        print "<li> $order[quantity] 道 $dishName </li>";
    }
    print "</ul>";
} else {
    print "你還沒有訂購任何東西。";
}
