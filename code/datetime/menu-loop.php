<?php
/** @var int $daysToPrint 印出天數 */
$daysToPrint = 4;
/** @var DateTime $datetime 時間物件 */
$datetime = new DateTime('next Tuesday');

print "<select name='day'>\n";

for ($i = 0; $i < $daysToPrint; $i++) {
    print "  <option>" . $datetime->format('l F jS') . "</option>\n";
    // 從現在的日期增加兩天
    $datetime->modify("+2 day");
}

print "</select>";
