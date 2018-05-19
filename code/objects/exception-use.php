<?php
/** @var Entree $drink 前菜  */
$drink = new Entree('一杯牛奶', '牛奶');

if ($drink->hasIngredient('牛奶')) {
    print "好喝！";
}
