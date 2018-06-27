<?php
/** @var DateTime $dateTime 時間物件 */
$dateTime = new DateTime();

print '現在時間：';
print $dateTime->format('r');
print "\n";