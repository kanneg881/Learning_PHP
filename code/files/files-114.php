<?php
/** @var bool|string $page 將前一個範例的檔案讀出 */
$page = file_get_contents('page-template.html');
// 加入頁面名稱
$page = str_replace('{page_title}', '歡迎', $page);

/**
 * 如果是下午，那頁面是藍色
 * 上午的話，頁面是綠色
 */
if (date('H' >= 12)) {
    $page = str_replace('{color}', 'blue', $page);
} else {
    $page = str_replace('{color}', 'green', $page);
}
// 從之前儲存的 session 變數中取得使用者名稱
$page = str_replace('{name}', $_SESSION['username'], $page);

// Write the results to page.html
file_put_contents('page.html', $page);
