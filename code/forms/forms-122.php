<?php
// 識別 request 方法以執行對應工作
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 如果 validate_form() 回傳錯誤，將錯誤訊息傳給 show_form()
    if ($form_errors = validateForm()) {
        showForm($form_errors);
    } else {
        processForm();
    }
} else {
    showForm();
}

/**
 * 送出表單時執行
 */
function processForm(): void
{
    print "你好，" . $_POST['myName'];
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm(array $errors = array()): void
{
    // 如果有錯誤傳入就印出
    if ($errors) {
        print '請更正這些錯誤：<ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
你的名字：<input type="text" name="myName">
<br>
<input type="submit" value="打招呼">
</form>
_HTML_;
}

/**
 * 檢驗表單資料
 *
 * @return array 錯誤訊息
 */
function validateForm(): array
{
    /** @var array $errors 錯誤訊息 */
    $errors = array();

    /**
     * 如果名字太短的話，就加入錯誤訊息
     */
    if (strlen($_POST['myName']) < 3) {
        $errors[] = '你的姓名必須至少3個字母。';
    }

    // 回傳錯誤值陣列（也可能是空的）
    return $errors;
}
