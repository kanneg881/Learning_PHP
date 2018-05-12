<?php
/** @var array $meals 餐點 */
$meals = array(
    '核桃小圓麵包' => 1,
    '腰果和白蘑菇' => 4.95,
    '桑椹乾' => 3.00,
    '茄子配辣椒醬' => 6.50,
    '泡芙蝦' => 0
);
/** @var array $books 書 */
$books = array(
    "The Eater's Guide To Chinese Characters",
    '如何在中國烹飪和飲食'
);

// 這行回傳真：鍵 桑椹乾 的值是 3.00
if (in_array(3, $meals)) {
    print '有一個 $3 的項目。';
}
// 回傳真
if (in_array('如何在中國烹飪和飲食', $books)) {
    print "我們有如何在中國烹飪和飲食";
}
// 回傳假：因為 in_array( ) 會區分大小寫
if (in_array("the eater's guide to chinese characters", $books)) {
    print "我們有 Eater's Guide to Chinese Characters 。";
}