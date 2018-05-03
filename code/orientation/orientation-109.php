<?php
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
