<?php
// 告訴瀏覽器這是 CSV 檔
header('Content-Type: text/csv');
// 告訴瀏覽器實際的 CSV 內容在另外一個檔案中
header('Content-Disposition: attachment; filename="dishes.csv"');