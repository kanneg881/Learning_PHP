<?php
/**
 * 驗證表單
 *
 * @return array 錯誤訊息和有效的資料
 */
function validateForm()
{
    /** @var array $errors 錯誤訊息 */
    $errors = array();
    /** @var array $input 輸入的資料 */
    $input = array();

    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

    if (is_null($input['age']) || ($input['age'] === false)) {
        $errors[] = '請輸入有效年齡。';
    }

    $input['price'] = filter_input(INPUT_POST, 'price',
        FILTER_VALIDATE_FLOAT);

    if (is_null($input['price']) || ($input['price'] === false)) {
        $errors[] = '請輸入有效的價格。';
    }

    // 使用空連結運算子避免 $_POST['name'] 是空值
    $input['name'] = trim($_POST['name'] ?? '');

    if (strlen($input['name']) == 0) {
        $errors[] = "你必需填入姓名。";
    }

    return array($errors, $input);
}
