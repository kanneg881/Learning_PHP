<?php
setcookie('userID', 'ralph');
?>
<html>
<head>
    <title>帶有 cookies 的頁面</title>
</head>
<body>
該頁面正確設置了一個 cookie，因為帶有 setcookie() 的 PHP 區塊，它在所有的 HTML 之前。
</body>
</html>