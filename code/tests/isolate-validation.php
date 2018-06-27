<?php
/**
 * 驗證表單
 *
 * @param array $submitted 提交
 * @return array 錯誤訊息和輸入資料
 */
function validateForm(array $submitted): array
{
    /** @var array $errors 錯誤訊息 */
    $errors = [];
    /** @var array $input 輸入資料 */
    $input = [];

    $input['age'] = filter_var($submitted['age'] ?? null, FILTER_VALIDATE_INT);

    if ($input['age'] === false) {
        $errors[] = '請輸入有效年齡。';
    }
    $input['price'] = filter_var($submitted['price'] ?? null, FILTER_VALIDATE_FLOAT);

    if ($input['price'] === false) {
        $errors[] = '請輸入有效的價格。';
    }
    $input['name'] = trim($submitted['name'] ?? '');

    if (strlen($input['name']) == 0) {
        $errors[] = "需要你的名字。";
    }

    return [$errors, $input,];
}
