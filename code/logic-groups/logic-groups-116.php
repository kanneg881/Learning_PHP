<?php
/**
 * 頁頭
 */
function pageHeader()
{
    print '<html><head><title>歡迎來到我的網站</title></head>';
    print '<body bgcolor="#ffffff">';
}

pageHeader();
print "歡迎，$user";
pageFooter();

/**
 * 頁腳
 */
function pageFooter()
{
    print '<hr>感謝您的光臨。';
    print '</body></html>';
}