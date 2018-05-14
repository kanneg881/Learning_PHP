<?php
/** @var string $myColor 我的顏色 */
$myColor = '#000000';

/**
 * 這是錯的，預設值不能是變數
 *
 * @param string $color 顏色
 */
function page_header_bad($color = $my_color)
{
    print '<html><head><title>歡迎來到我的網站</title></head>';
    print '<body bgcolor="#' . $color . '">';
}