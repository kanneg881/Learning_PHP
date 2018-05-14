<?php
/**
 * 倒數計時
 *
 * @param int $top 倒數時間
 */
function countdown($top)
{
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "轟！\n";
}
/** @var int $counter 計數器 */
$counter = 5;
countdown($counter);
print "現在，倒數時間是$counter";