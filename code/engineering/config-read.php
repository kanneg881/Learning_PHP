<?php
/** @var array|bool $config 設定檔 */
$config = parse_ini_file('config.ini');
/** @var PDO $database PDO 資料庫 */
$database = new PDO($config['dsn'], $config['dbuser'], $config['dbpassword']);