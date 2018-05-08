<?php
/** @var int $x strcmp 回傳值 */
$x = strcmp("x54321", "x5678");

if ($x > 0) {
    print '字串 "x54321" 比字串 "x5678" 大。';
} elseif ($x < 0) {
    print '字串 "x54321" 比字串 "x5678" 小。';
}
$x = strcmp("54321", "5678");

if ($x > 0) {
    print '字串 "54321" 比字串 "5678" 大。';
} elseif ($x < 0) {
    print '字串 "54321" 比字串 "5678" 小。';
}
$x = strcmp('6 pack', '55 card stud');

if ($x > 0) {
    print '字串 "6 pack" 比字串 "55 card stud" 大。';
} elseif ($x < 0) {
    print '字串 "6 pack" 比字串 "55 card stud" 小。';
}
$x = strcmp('6 pack', 55);

if ($x > 0) {
    print '字串 "6 pack" 比數字 55 大。';
} elseif ($x < 0) {
    print '字串 "6 pack" 比數字 55 小。';
}