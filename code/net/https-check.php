<?php
/** @var bool $isHttps 是否是 https 協定 */
$isHttps = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on');

if (!$isHttps) {
    /** @var string $newUrl 新網址 */
    $newUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $newUrl");
    exit();
}
print "您通過HTTPS訪問了此頁面。好極了！";
