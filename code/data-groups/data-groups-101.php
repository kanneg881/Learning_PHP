<?php
/** @var array $dinner 晚餐 */
$dinner = array('甜玉米和蘆筍', '檸檬雞', '紅燒竹菇',);

for ($i = 0, $numberDishes = count($dinner); $i < $numberDishes; $i++) {
    print "料理號 $i 是$dinner[$i]\n";
}