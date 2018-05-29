<?php
// 識別 request 方法以執行對應工作
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 如果 validateForm() 回傳錯誤，傳遞給 showForm()
    list($formErrors, $input) = validateForm();

    if ($formErrors) {
        showForm($formErrors);
    } else {
        processForm($input);
    }
} else {
    showForm();
}
