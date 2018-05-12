<?php
/** @var array $rowStyles 每一列的樣式 */
$rowStyles = array('even', 'odd',);
/** @var int $styleIndex 樣式索引 */
$styleIndex = 0;
/** @var array $meal 餐點 */
$meal = array(
    '早餐' => '核桃小圓麵包',
    '午餐' => '腰果和白蘑菇',
    '點心' => '桑椹乾',
    '晚餐' => '茄子配辣椒醬',
);
print "<table>\n";
foreach ($meal as $key => $value) {
    print '<tr class="' . $rowStyles[$styleIndex] . '">';
    print "<td>$key</td><td>$value</td></tr>\n";
    // 這裡把變數 $styleIndex 的值作0跟1的切換
    $styleIndex = 1 - $styleIndex;
}
print '</table>';
