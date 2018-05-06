<?php
/** @var string $zipCode 郵遞區號 */
$zipCode = '6520';
/** @var int $year 年 */
$year = 2018;
/** @var int $month 月 */
$month = 5;
/** @var int $day 日 */
$day = 4;

printf("郵遞區號是 %05d，然後日期是 %02d/%02d/%d", $zipCode, $month, $day, $year);