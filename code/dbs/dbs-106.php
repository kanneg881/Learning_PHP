<?php
try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('sqlite:/tmp/restaurant.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 刪除太貴的菜
    if ($makeThingsCheaper) {
        $pdo->exec("DELETE FROM dishes WHERE price > 19.95");
    } else {
        // 或刪除所有的菜
        $pdo->exec("DELETE FROM dishes");
    }
} catch (PDOException $exception) {
    print "無法刪除行：" . $exception->getMessage();
}
