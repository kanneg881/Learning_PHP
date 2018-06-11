<?php
/**
 * 驗證表單
 *
 * @return array 錯誤訊息，資料輸入
 */
function validateForm()
{
    global $database;
    /** @var array $input 輸入資料 */
    $input = [];
    /** @var array $errors 錯誤訊息 */
    $errors = [];
    /** @var bool $passwordOK 只有密碼正確時才會被設定為 true */
    $passwordOK = false;

    $input['username'] = $_POST['username'] ?? '';
    /** @var string $submittedPassword 送出的密碼 */
    $submittedPassword = $_POST['password'] ?? '';
    /** @var PDOStatement $statement PDO 聲明 */
    $statement = $database->prepare('SELECT password FROM users WHERE username = ?');
    $statement->execute($input['username']);
    /** @var mixed $row 資料庫一筆查詢結果 */
    $row = $statement->fetch();

    // 如果回傳 false，表示該帳號記錄在資料庫中不存在
    if ($row) {
        $passwordOK = password_verify($submittedPassword, $row[0]);
    }

    if (!$passwordOK) {
        $errors[] = '請輸入有效的帳號和密碼。';
    }

    return array($errors, $input);
}
