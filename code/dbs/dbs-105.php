<?php
try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /**
     * Eggplant with Chili Sauce 改成辣的
     * 如果我們不在乎有幾列被變動
     * 就不用在乎回傳值
     */
    $pdo->exec("UPDATE dishes SET is_spicy = 1
                WHERE dish_name = '茄子配辣椒醬'");
    // Lobster with Chili Sauce 改為辣的，價格也抬高
    $pdo->exec("UPDATE dishes SET is_spicy = 1, price = price * 2
               WHERE dish_name = '龍蝦配辣椒醬'");
} catch (PDOException $exception) {
    print "無法插入一筆資料：" . $exception->getMessage();
}
