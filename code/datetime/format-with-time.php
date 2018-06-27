<?php
/** @var DateTime $a 如果只有提供時間的話，日/月/年會使用現在的日期 */
$a = new DateTime('10:36 am');
/** @var DateTime $b 如果只有提供日期的話，時/分/秒會使用現在的日期 */
$b = new DateTime('5/11');
/** @var DateTime $c 時間物件範例 */
$c = new DateTime('March 5th 2017');
/** @var DateTime $d 時間物件範例 */
$d = new DateTime('3/10/2018');
/** @var DateTime $e 時間物件範例 */
$e = new DateTime('2015-03-10 17:34:45');
// DateTime understands microseconds
/** @var DateTime $f 能夠辨認為秒 */
$f = new DateTime('2015-03-10 17:34:45.326425');
// Epoch timestamp must be prefixed with @
/** @var DateTime $g 新紀元(Epoch)時間戳記必須加前綴符號@ */
$g = new DateTime('@381718923');
/** @var DateTime $h 一般 log 格式 */
$h = new DateTime('3/Mar/2015:17:34:45 +0400');

/** @var DateTime $i 相對時間格式也可以 */
$i = new DateTime('next Tuesday');
/** @var DateTime $j 時間物件範例 */
$j = new DateTime("last day of April 2015");
/** @var DateTime $k 時間物件範例 */
$k = new DateTime("November 1, 2012 + 2 weeks");
