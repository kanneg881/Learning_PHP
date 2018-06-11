<?php
/**
 * 驗證表單
 *
 * @return array 錯誤訊息，資料輸入
 */
function validateForm(): array
{
    /** @var array $input 輸入資料 */
    $input = [];
    /** @var array $errors 錯誤訊息 */
    $errors = [];

    /** @var array $users 使用者帳號與亂碼密碼樣本 */
    $users = [
        'alice' => '$2y$10$N47IXmT8C.sKUFXs1EBS9uJRuVV8bWxwqubcvNqYP9vcFmlSWEAbq',
        'bob' => '$2y$10$qCczYRc7S0llVRESMqUkGeWQT4V4OQ2qkSyhnxO0c.fk.LulKwUwW',
        'charlie' => '$2y$10$nKfkdviOBONrzZkRq5pAgOCbaTFiFI6O2xFka9yzXpEBRAXMW5mYi'
    ];

    // 先確定帳號是正確的
    if (!array_key_exists($_POST['username'], $users)) {
        $errors[] = '請輸入有效的帳號和密碼。';
    } else {
        // 檢查密碼是否正確
        /** @var string $savedPassword 密碼 */
        $savedPassword = $users[$input['username']];
        /** @var string $submittedPassword 送出的密碼 */
        $submittedPassword = $_POST['password'] ?? '';

        if (!password_verify($submittedPassword, $savedPassword)) {
            $errors[] = '請輸入有效的帳號和密碼。';
        }
    }

    return array($errors, $input);
}
