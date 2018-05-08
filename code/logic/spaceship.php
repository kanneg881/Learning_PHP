<?php

/** @var int $a 因為 1 比 12.7 小，所以 $a 是負值 */
$a = 1 <=> 12.7;

/** @var int $b 因為字元 "c" 在 "b" 後面，所以 $b 是正值 */
$b = "charlie" <=> "bob";

/** @var int $x 進行數值字串比較時，行為同 < 跟 >，不同於 strcmp() */
$x = '6 pack' <=> '55 card stud';

if ($x > 0) {
    print '字串 "6 pack" 比字串 "55 card stud" 大。';
} elseif ($x < 0) {
    print '字串 "6 pack" 比字串 "55 card stud" 小。';
}

// 進行數值字串比較時，行為同 < 跟 >，不同於 strcmp()
$x = '6 pack' <=> 55;
if ($x > 0) {
    print '字串 "6 pack" 比數字 55 大。';
} elseif ($x < 0) {
    print '字串 "6 pack" 比數字 55 小。';
}
