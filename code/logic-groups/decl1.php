<?php
/**
 * 倒數
 *
 * @param int $top 倒數秒數
 */
function countdown(int $top)
{
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "轟！\n";
}
/** @var int $counter 倒數計時器 */
$counter = 5;
countdown($counter);
print "現在，倒數計時器是$counter";