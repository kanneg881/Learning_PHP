<?php
/** @var string $message 西里歐字和英文字 */
$message = "In Russia, I like to eat каша and drink квас.";

print "substr() says: " . substr($message, 0, 30) . "\n";
print "mb_substr() says: " . mb_substr($message, 0, 30) . "\n";
