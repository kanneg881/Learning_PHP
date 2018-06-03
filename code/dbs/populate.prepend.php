<?php
include __DIR__ . '/full-populate.prepend.php';
$database->exec('DELETE FROM dishes WHERE dish_id >= 5');
unset($database);
