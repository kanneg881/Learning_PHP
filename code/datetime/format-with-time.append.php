<?php

foreach (range('a','k') as $item) {
    /** @var DateTime $datetime 時間物件 */
    $datetime = $$item;
    print $datetime->format('r') . "\n";
}
