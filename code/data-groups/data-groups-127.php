<?php
/** @var array $meal 餐點 */
$meal = array(
    '早餐' => '核桃小圓麵包',
    '午餐' => '腰果和白蘑菇',
    '點心' => '桑椹乾',
    '晚餐' => '茄子配辣椒醬',
);
print "<table>\n";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';