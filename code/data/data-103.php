<?php
// 取得 $_POST['comments'] 開頭的30個字元
print substr($_POST['comments'], 0, 30);
// 加入省略符號
print '...';