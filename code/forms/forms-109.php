<?php
/** @var string $comments 從留言中移除 HTML */
$comments = strip_tags($_POST['comments']);
// 可以印出 $comments 了
print $comments;
