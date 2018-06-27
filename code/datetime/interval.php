<?php
/** @var DateTime $now 現在的時間物件 */
$now = new DateTime();
/** @var DateTime $birthDate 生日 */
$birthDate = new DateTime('1990-05-12');
/** @var bool|DateInterval $different 差異 */
$different = $birthDate->diff($now);

if (($different->y > 13) && ($different->invert == 0)) {
    print "你超過13歲。";
} else {
    print "對不起，太年輕了。";
}