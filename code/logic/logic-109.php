<?php
print '<select name="doughnuts">' . PHP_EOL;

for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
    print "<option>$min - $max</option>" . PHP_EOL;
}
print '</select>';