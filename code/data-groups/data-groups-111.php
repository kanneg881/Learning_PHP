<?php
/** @var array $dimsum 點心 */
$dimsum = array('雞包子','填鴨網','蘿蔔蛋糕');
print '<tr><td>' . implode('</td><td>',$dimsum) . '</td></tr>';