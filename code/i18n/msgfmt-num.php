<?php
/** @var string $message 訊息 */
$message = "The cost is {0,number,currency}.";
/** @var MessageFormatter $formatUS 格式化美式英文 */
$formatUS = new MessageFormatter('en_US', $message);
/** @var MessageFormatter $formatGB 格式化英式英文 */
$formatGB = new MessageFormatter('en_GB', $message);

print $formatUS->format([4.21]) . "\n";
print $formatGB->format([4.21]) . "\n";
