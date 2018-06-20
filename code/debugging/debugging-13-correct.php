<?php
// 連接資料庫
try {
    /** @var PDO $database PDO 物件 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (Exception $exception) {
    die("無法連線：" . $exception->getMessage());
}
// 設定要丟出例外
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 設定存取方法是將資料以陣列回傳
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
/** @var array $dishNames 從資料庫中取回菜名 */
$dishNames = [];
/** @var bool|PDOStatement $result 資料庫查詢結果 */
$result = $database->query('SELECT dish_id, dish_name FROM dishes');

foreach ($result->fetchAll() as $row) {
    $dishNames[$row['dish_id']] = $row['dish_name'];
}
$result = $database->query('SELECT * FROM customers ORDER BY phone DESC');
/** @var array $customers 客戶資料 */
$customers = $result->fetchAll();

if (count($customers) == 0) {
    print "沒有客戶。";
} else {
    print '<table>';
    print '<tr><th>ID</th><th>名稱</th><th>電話</th><th>最喜愛的菜</th></tr>';
    foreach ($customers as $customer) {
        printf("<tr><td>%d</td><td>%s</td><td>%f</td><td>%s</td></tr>\n",
            $customer['customer_id'],
            htmlentities($customer['customer_name']),
            $customer['phone'],
            $customer['favorite_dish_id']);
    }
    print '</table>';
}
