<?php
/** @var int $age 年紀 */
$age = 12;
/** @var int $shoeSize 鞋號 */
$shoeSize = 13;
if ($age > $shoeSize) {
    print "訊息 1.";
} elseif (($shoeSize++) && ($age > 20)) {
    print "訊息 2.";
} else {
    print "訊息 3.";
}
print "年紀：{$age}。鞋號：$shoeSize";