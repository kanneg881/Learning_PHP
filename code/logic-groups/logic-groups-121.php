<?php
/**
 * 頁頭5
 * 一個預設值參數：一定要放在最後
 *
 * @param string $color 顏色
 * @param string $title 標題
 * @param string $header 頁頭
 */
function pageHeader5($color, $title, $header = '歡迎')
{
    print '<html><head><title>歡迎來到' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

// 呼叫端可以使用的方法：
// $header 使用預設值
pageHeader5('66cc99', '我完美的一頁');
// 不使用預設值
pageHeader5('66cc99', '我完美的一頁', '這個頁面很棒！');

/**
 * 頁頭6
 * 兩個預設值參數：一定要放在最後兩個
 *
 * @param string $color 顏色
 * @param string $title 標題
 * @param string $header 頁頭
 */
function pageHeader6($color, $title = '這一頁', $header = '歡迎')
{
    print '<html><head><title>歡迎來到' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

// 呼叫端可以使用的方法：
// $title 跟 $header 使用預設值
pageHeader6('66cc99');
// $header 使用預設值
pageHeader6('66cc99', '我完美的一頁');
// 不使用預設值
pageHeader6('66cc99', '我完美的一頁', '這個頁面很棒！');

/**
 * 頁頭7
 * 全部參數都使用預設參數
 *
 * @param string $color 顏色
 * @param string $title 標題
 * @param string $header 頁頭
 */
function pageHeader7($color = '336699', $title = '這一頁', $header = '歡迎')
{
    print '<html><head><title>歡迎來到' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>";
}

// 可以呼叫此函式的方法：
// 全部都使用預設值
pageHeader7();
// 使用預設 $title 及 $header
pageHeader7('66cc99');
// 使用預設 $header
pageHeader7('66cc99', '我完美的一頁');
// 不用預設值
pageHeader7('66cc99', '我完美的一頁', '這個頁面很棒！');