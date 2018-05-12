<?php
/**
 * 泡芙蝦是免費的！
 *
 * @var array $meals 餐點
 */
$meals = array(
    '核桃小圓麵包' => 1,
    '腰果和白蘑菇' => 4.95,
    '桑椹乾' => 3.00,
    '茄子配辣椒醬' => 6.50,
    '泡芙蝦' => 0
);
/** @var array $books 書 */
$books = array(
    "食者的中文指南",
    '如何在中國烹飪和飲食'
);

// 這行回傳真
if (array_key_exists('泡芙蝦', $meals)) {
    print "是的，我們有泡芙蝦";
}
// 這行回傳假
if (array_key_exists('牛排三明治', $meals)) {
    print "我們有一個牛排三明治";
}
// 這行回傳真
if (array_key_exists(1, $books)) {
    print "元素 1 是如何在中國烹飪和飲食";
}