<?php
/** @var bool|string $page */
$page = file_get_contents('page.html');
/** @var bool|string $file100 */
$file100 = file_get_contents('files-100.out');

if ($page !== $file100) {
    var_dump("產生", $page, "預期", $file100);
}
