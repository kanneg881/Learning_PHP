<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    print "你好，" . $_POST['myName'];
} else {
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
 你的名字：<input type="text" name="myName" >
<br>
<input type="submit" value="打招呼">
</form>
_HTML_;
}
