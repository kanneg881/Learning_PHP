<?php
/** @var array $dimsum 點心 */
$dimsum = array('雞包子','填鴨網','蘿蔔蛋糕');
/** @var string $menu 菜單 */
$menu = implode(', ', $dimsum);
print $menu;