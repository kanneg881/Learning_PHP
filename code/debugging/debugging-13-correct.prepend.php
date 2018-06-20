<?php 
unlink('/tmp/restaurant.db');
/** @var PDO $pdo PDO 物件 */
$pdo = new PDO('sqlite:/tmp/restaurant.db');
$pdo->exec(file_get_contents(__DIR__ . '/../dbs/dbs-134.sql'));

foreach (file(__DIR__ . '/../dbs//dbs-15.sql') as $sql) {
    $pdo->exec(trim($sql));
}
$pdo->exec('CREATE TABLE customers (customer_id INT PRIMARY KEY, customer_name TEXT, phone TEXT, favorite_dish_id INT)');

/** @var array $customers 客戶資料 */
$customers = [
    ['Alice','1234',1],
    ['Bob','1-234-567-9876',3],
    ['Charlie','+1234',2],
    ['David','567-2323',5]
];

/** @var bool|PDOStatement $statement PDO 預備式 */
$statement = $pdo->prepare('INSERT INTO customers (customer_id, customer_name, phone, favorite_dish_id) VALUES (NULL,?,?,?)');

foreach ($customers as $customer) {
    $statement->execute($customer);
}
unset($pdo, $statement, $customers);
