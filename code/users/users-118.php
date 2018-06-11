<?php
session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 1;
}
print "你已經看過這個頁面 " . $_SESSION['count'] . ' 次。';
