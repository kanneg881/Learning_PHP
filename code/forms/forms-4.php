<?php
/** @var array $input 輸入料 */
$input['order'] = $_POST['order'];

if (!in_array($input['order'], $GLOBALS['sweets'])) {
    /** @var array $errors 錯誤訊息 */
    $errors[] = '請選擇一個有效的訂單。';
}
