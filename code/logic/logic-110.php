<?php
print "這總是會印出。";

if ($loggedIn) {
    print "歡迎登機，可信用户。";
    print '只有在 $loggedIn 為真時才會印出。';
}
print "這也總是會印出。";