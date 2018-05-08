<?php
/** @var int $i 遞增變數 */
$i = 1;
print '<select name="people">' . PHP_EOL;

while ($i <= 10) {
    print "<option>$i</option>" . PHP_EOL;
    $i++;
}
print '</select>';