<?php
// 如果表單送出後印出祝賀詞
if ($_POST['user']) {
    print "你好，";
    // 印出被送出表單中 'user' 欄位名稱
    print $_POST['user'];
    print "!";
} else {
    // 否則, 就顯示表單
    print <<<_HTML_
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP 說你好</title>
</head>
<body>
<form method="POST" action="$_SERVER[PHP_SELF]">
    <label>
        你的名字:
        <input type="text" name="user"/>
    </label>
    <br>
    <button type="submit">說你好</button>
</form>
</body>
</html>
_HTML_;
}
