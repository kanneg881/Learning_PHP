<?php
if (file_exists('/usr/local/htdocs/index.html')) {
    print "索引檔案在那裡。";
} else {
    print "/usr/local/htdocs 中沒有索引檔案。";
}