<?php
/** @var string $dinner 晚餐 */
$dinner = '咖哩魷魚';

/**
 * 素食晚餐
 */
function vegetarianDinner( ) {
    global $dinner;
    print "之前的晚餐是{$dinner}，但現在是";
    $dinner = '炒豌豆筍';
    print $dinner;
    print "\n";
}

print "定期晚餐是{$dinner}。\n";
vegetarianDinner( );
print "定期晚餐是$dinner";