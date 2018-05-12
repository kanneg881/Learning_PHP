<?php
/** @var array $meal 餐點 */
$meal = array(
    '早餐' => '核桃小圓麵包',
    '午餐' => '腰果和白蘑菇',
    '點心' => '桑椹乾',
    '晚餐' => '茄子配辣椒醬'
);

print "排序之前：\n";

foreach ($meal as $key => $value) {
    print "   \$餐點：$key $value\n";
}

ksort($meal);

print "排序之後：\n";

foreach ($meal as $key => $value) {
    print "   \$餐點：$key $value\n";
}