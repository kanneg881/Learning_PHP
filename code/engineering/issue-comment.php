<?php
// MXH-26: 將 email 地址 URL 編碼，避免 + 問題
$email = urlencode($email);
