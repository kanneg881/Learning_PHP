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
