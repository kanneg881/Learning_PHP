<?php
/**
 * $_POST['month']，$_POST['day']，和 $_POST['year']
 * 包含從表單提交的月份、日期
 *
 * $_POST['hr']，$_POST['mn']
 * 包含從表單提交的時和分
 */

/** @var DateTime $datetime 包含現在的時間，但接著就會被覆蓋掉 */
$datetime = new DateTime();

$datetime->setDate($_POST['year'], $_POST['month'], $_POST['day']);
$datetime->setTime($_POST['hour'], $_POST['minute']);

print $datetime->format('r');