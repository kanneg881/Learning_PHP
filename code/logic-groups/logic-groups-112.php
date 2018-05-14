<?php
/** @var string $dinner 晚餐 */
$dinner = '咖哩魷魚';

/**
 * 素食晚餐
 */
function vegetarianDinner()
{
    print "晚餐是{$dinner}，或";
    $dinner = '炒碗豆筍';
    print $dinner;
    print "\n";
}

/**
 * 猶太晚餐
 */
function kosherDinner()
{
    print "晚餐是{$dinner}，或";
    $dinner = '功夫雞';
    print $dinner;
    print "\n";
}

print "素食";
vegetarianDinner();
print "猶太";
kosherDinner();
print "定期晚餐是$dinner";