<?php
session_start();

if (array_key_exists('username', $_SESSION)) {
    print "你好，$_SESSION[username]。";
} else {
    print '你好，陌生人。';
}
