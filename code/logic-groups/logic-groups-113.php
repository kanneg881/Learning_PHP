<?php
/** @var string $dinner 晚餐 */
$dinner = '咖哩魷魚';

/**
 * 長壽的晚餐
 */
function macrobioticDinner()
{
    /** @var string $dinner 晚餐 */
    $dinner = "一些蔬菜";
    print "晚餐是$dinner";
    // 屈服於海洋的樂趣
    print " 但我寧願有";
    print $GLOBALS['dinner'];
    print "\n";
}

macrobioticDinner();
print "定期晚餐是：$dinner";