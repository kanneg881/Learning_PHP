<?php
/** @var MessageFormatter $fomatFavorites 英式英文格式化訊息，最喜歡的食物 */
$fomatFavorites = new MessageFormatter('en_GB', $messages['en_GB']['FAVORITE_FOODS']);
/** @var MessageFormatter $formatCookie 英式英文格式化訊息，餅乾 */
$formatCookie = new MessageFormatter('en_GB', $messages['en_GB']['COOKIE']);

/** @var string $cookie 這行會回傳 "biscuit" */
$cookie = $formatCookie->format([]);

// 印出 "biscuit" 對應的訊息
print $fomatFavorites->format([$cookie]);
