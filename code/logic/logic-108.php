<?php
print '<select name="people">' . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    print "<option>$i</option>" . PHP_EOL;
}
print '</select>';
