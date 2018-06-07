<?php
/** @var bool|string $page 讀取範例 9-1 的檔案 */
$page = file_get_contents('page-template.html');

// 加入頁面名稱
$page = str_replace('{page_title}', '歡迎', $page);

// 上午的話，頁面是綠色
if (date('H' >= 12)) {
    $page = str_replace('{color}', 'blue', $page);
} else {
    $page = str_replace('{color}', 'green', $page);
}
// 從之前儲存的 session 變數中取得使用者名稱
$page = str_replace('{name}', $_SESSION['username'], $page);
/** @var bool|int $result 寫入結果 */
$result = file_put_contents('page.html', $page);

// 檢查 file_put_contents() 的回傳值是 false 還是 -1
if (($result === false) || ($result == -1)) {
    print "無法將HTML保存到page.html";
}
