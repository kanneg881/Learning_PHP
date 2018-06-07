<?php
try {
    /** @var PDO $database PDO 資料庫 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
    exit();
}

// // 告訴瀏覽器接下來有個名叫 "dishes.csv" 的 CSV 檔
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="dishes.csv"');

/** @var bool|resource $file 開啟 file handle 為輸出串流 */
$file = fopen('php://output', 'wb');

/** @var bool|PDOStatement $dishes 從資料庫取出資料並印出 */
$dishes = $database->query('SELECT dish_name, price, is_spicy FROM dishes');

while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
    fputcsv($file, $row);
}
