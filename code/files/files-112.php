<?php
// 移除斜線
$user = str_replace('/', '', $_POST['user']);
// 移除 ..
$user = str_replace('..', '', $user);

if (is_readable("/usr/local/data/$user")) {
    print '使用者個人資料 ' . htmlentities($user) . '：<br/>';
    print file_get_contents("/usr/local/data/$user");
}
