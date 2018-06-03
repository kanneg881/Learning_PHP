<?php
/** @var PDOStatement $query */
$query = $database->query('SELECT dish_name, price FROM dishes');

while ($row = $query->fetch()) {
    print "$row[dish_name], $row[price]\n";
}
