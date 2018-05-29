<?php
/** @var array $input 輸入資料 */
$input['email'] = filter_input(INPUT_POST, 'email',
    FILTER_VALIDATE_EMAIL);

if (!$input['email']) {
    /** @var array $errors 錯誤訊息 */
    $errors[] = '請輸入有效的電子郵件地址。';
}
