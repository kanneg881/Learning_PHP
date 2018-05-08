<?php
/**
 * 變數 $_POST['zipcode'] 中裝載了表單欄位 "zipcode" 的值
 * @var string $zipCode
 */
$zipCode = trim($_POST['zipCode']);
// 變數 $zipcode 取得去掉頭尾空白的值
$zipCodeLength = strlen($zipCode);

// 如果郵遞區號長度不是5個字元，就顯示警告
if ($zipCodeLength != 5) {
    print "請輸入長度為5個字的郵政區號。";
}