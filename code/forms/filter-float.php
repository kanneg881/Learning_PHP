<?php
/** @var mixed $price 過濾後的價錢 */
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

if (is_null($price) || ($price === false)) {
    /** @var array 錯誤訊息 */
    $errors[] = '請輸入有效的價錢。';
}
