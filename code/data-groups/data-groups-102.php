<?php
/** @var array $rowStyles 每一列的樣式 */
$rowStyles = array('even', 'odd',);
/** @var array $dinner 晚餐 */
$dinner = array('甜玉米和蘆筍', '檸檬雞', '紅燒竹菇',);

print "<table>\n";

for ($i = 0, $numberDishes = count($dinner); $i < $numberDishes; $i++) {
    print '<tr class="' . $rowStyles[$i % 2] . '">';
    print "<td>元素 $i</td><td>$dinner[$i]</td></tr>\n";
}
print '</table>';
