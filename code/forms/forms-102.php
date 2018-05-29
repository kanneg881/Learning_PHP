<?php
if (strlen(trim($_POST['name'])) == 0) {
    /** @var array 錯誤訊息 */
    $errors[] = "你必需填入姓名。";
}
