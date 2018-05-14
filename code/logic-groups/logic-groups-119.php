<?php
/**
 * 頁頭4
 *
 * @param string $color 顏色
 * @param string $title 標題
 */
function pageHeader4($color, $title)
{
    print '<html><head><title>歡迎來到' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
}