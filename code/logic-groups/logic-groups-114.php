<?php
/** @var string $dinner 晚餐 */
$dinner = '咖哩魷魚';

/**
 * 飢餓晚餐
 */
function hungryDinner()
{
    $GLOBALS['dinner'] .= '和油炸芋頭';
}

print "定期晚餐是$dinner";
print "\n";
hungryDinner();
print "飢餓晚餐是$dinner";