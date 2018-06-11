<?php
require 'FormHelper.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * @var array $errors 錯誤訊息
     * @var array $input 輸入資料
     */
    list($errors, $input) = validateForm();

    if ($errors) {
        showForm($errors);
    } else {
        processForm($input);
    }
} else {
    showForm();
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm($errors = []): void
{
    /** @var FormHelper $form 沒有自訂預設值，所以 FormHelper 建構子沒有參數傳入 */
    $form = new FormHelper();

    // 建立顯示錯誤的 HTML
    if ($errors) {
        /** @var string $errorHtml 錯誤的 HTML 區塊 */
        $errorHtml = '<ul><li>';
        $errorHtml .= implode('</li><li>', $errors);
        $errorHtml .= '</li></ul>';
    } else {
        $errorHtml = '';
    }

    // 表單很簡短，所以直接用印出的方法建立元件
    print <<<_FORM_
<form method="POST" action="{$form->encode($_SERVER['PHP_SELF'])}">
$errorHtml
使用者名稱：{$form->input('text', ['name' => 'username'])}
<br/>
密碼：{$form->input('password', ['name' => 'password'])}
<br/>
{$form->input('submit', ['value' => '登入'])}
</form>
_FORM_;
}

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
    /** @var array $users 幾個使用者帳號與密碼樣本 */
    $users = [
        'alice' => 'dog123',
        'bob' => 'my^pwd',
        'charlie' => '**fun**',
    ];
    // 驗證使用者帳號正確性
    $input['username'] = $_POST['username'] ?? '';

    if (!array_key_exists($input['username'], $users)) {
        $errors[] = '請輸入有效的帳號和密碼。';
    } else {
        /**
         * 如果使用者帳號，那就不需要查驗密碼
         * 查驗密碼正確性
         */
        /** @var string $savedPassword 密碼 */
        $savedPassword = $users[$input['username']];
        /** @var string $submittedPassword 送出的密碼 */
        $submittedPassword = $_POST['password'] ?? '';

        if ($savedPassword != $submittedPassword) {
            $errors[] = '請輸入有效的帳號和密碼。';
        }
    }

    return array($errors, $input);
}

/**
 * 處理表單
 *
 * @param array $input 輸入資料
 */
function processForm(array $input): void
{
    // 講使用者名稱加入 session 中
    $_SESSION['username'] = $input['username'];

    print "歡迎，$_SESSION[username]";
}
