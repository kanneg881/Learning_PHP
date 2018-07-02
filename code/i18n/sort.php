<?php

/** @var Collator $english 美式英文 */
$english = new Collator('en_US');
/** @var Collator $danish 丹麥文 */
$danish = new Collator('da_DK');
/** @var array $words 單字 */
$words = ['absent', 'åben', 'zero',];

print "排序之前：" . implode(', ', $words) . "\n";

$english->sort($words);
print "en_US 排序：" . implode(', ', $words) . "\n";

$danish->sort($words);
print "da_DK 排序：" . implode(', ', $words) . "\n";
