<?php
// 識別 request 方法以執行對應工作
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    processForm();
} else {
    showForm();
}

/**
 * 當表單送出時執行
 */
function processForm(): void
{
    print "你好，" . $_POST['myName'];
}

/**
 * 顯示表單
 */
function showForm(): void
{
    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
你的名字：<input type="text" name="myName">
<br>
<input type="submit" value="打招呼">
</form>
_HTML_;
}
