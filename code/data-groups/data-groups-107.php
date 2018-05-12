<?php
/** @var array $dishes 料理 */
$dishes['乾炒牛河'] = 12;
$dishes['乾炒牛河']++;
$dishes['烤鴨'] = 3;

$dishes['total'] = $dishes['乾炒牛河'] + $dishes['烤鴨'];

if ($dishes['total'] > 15) {
    print "你吃了很多：";
}
print '你吃了 ' . $dishes['乾炒牛河'] . ' 道乾炒牛河料理。';