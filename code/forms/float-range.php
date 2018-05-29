<?php
/** @var array $input 輸入資料 */
$input['price'] = filter_input(INPUT_POST, 'price',
    FILTER_VALIDATE_FLOAT);

if (is_null($input['price']) || ($input['price'] === false) ||
    ($input['price'] < 10.00) || ($input['price'] > 50.00)) {
    /** @var array $errors 錯誤訊息 */
    $errors[] = '請輸入10到50元之間的有效價格。';
}
