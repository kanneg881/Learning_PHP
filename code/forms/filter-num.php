<?php
/** @var mixed $age 過濾後的年齡 */
$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

if (is_null($age) || ($age === false)) {
    /** @var array 錯誤訊息 */
    $errors[] = '請輸入有效的年齡。';
}
