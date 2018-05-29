<?php
/** @var array $input 輸入的資料 */
$input['order'] = $_POST['order'];

if (!array_key_exists($input['order'], $GLOBALS['sweets'])) {
    /** @var array $errors 錯誤訊息 */
    $errors[] = '請選擇一個有效的訂單。';
}
