<?php
/** @var array $input 輸入資料 */
$input['age'] = filter_input(
    INPUT_POST,
    'age',
    FILTER_VALIDATE_INT,
    array(
        'options' => array(
            'min_range' => 18,
            'max_range' => 65
        )
    ));

if (is_null($input['age']) || ($input['age'] === false)) {
    /** @var array $errors 錯誤訊息 */
    $errors[] = '請輸入18至65之間的有效年齡。';
}
