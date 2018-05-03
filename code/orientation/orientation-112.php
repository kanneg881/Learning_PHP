<?php
/** @var PDO $database 使用 SQLite 資料庫名稱 'dinner.db' */
$database = new PDO('sqlite:dinner.db');
/** @var array $meals 定義餐點的種類 */
$meals = array('早餐', '午餐', '晚餐');

/**
 * 檢查送出的表單中 "meal" 變數值是不是 "breakfast"、
 * "lunch" 或 "dinner" 其中之一
 */
if (in_array($_POST['meal'], $meals)) {
    /** @var bool|PDOStatement $statement 取得相關該餐點的菜名 */
    $statement = $database->prepare('SELECT dish, price FROM meals WHERE meal LIKE ?');
    $statement->execute(array($_POST['meal']));
    /** @var array $mealsResult 相關該餐點的菜名 */
    $mealsResult = $statement->fetchAll();

    // 如果找不到任何菜名的話
    if (count($mealsResult) == 0) {
        print "找不到任何菜名。";
    } else {
        /**
         * 在 HTML 表格中，印出所有的菜名與價格
         */
        print '<table><tr><th>菜名</th><th>價格</th></tr>';

        foreach ($mealsResult as $row) {
            print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
        print "</table>";
    }
} else {
    /**
     * 如果表單 "meal" 變數值不是 "早餐"，"午餐"，"晚餐"
     */
    print "未知的餐點。";
}
