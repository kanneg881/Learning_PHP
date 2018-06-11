<?php
// cookie 一小時後過期
setcookie('shortUserID', 'ralph', time() + 60 * 60);

// cookie 一天後過期
setcookie('longerUserID', 'ralph', time() + 60 * 60 * 24);

/** @var DateTime $dateTime 日期時間物件 */
$dateTime = new DateTime("2019-10-01 12:00:00");
// cookie 在 2019 年 10 月 1 日過期
setcookie('muchLongerUserID', 'ralph', $dateTime->format('U'));
