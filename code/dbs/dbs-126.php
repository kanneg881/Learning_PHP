<?php

try {
    /** @var PDO $pdo 資料庫物件 */
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant', 'penguin',
        'top^hat');
    // 此處放些用 $database 做事的程式碼
} catch (PDOException $exception) {
    print "無法連接到資料庫：" . $exception->getMessage();
}
