<?php
/** @var string $english 英文 */
$english = "cheese";
/** @var string $greek 希臘文 */
$greek = "τυρί";

print "strlen() 説 " . strlen($english) . " 對於 $english 然後 " .
    strlen($greek) . " 對於 $greek.\n";

print "mb_strlen() 説 " . mb_strlen($english) . " 對於 $english 然後 " .
    mb_strlen($greek) . " 對於 $greek.\n";
