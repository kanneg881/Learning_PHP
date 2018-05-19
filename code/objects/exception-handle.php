<?php

try {
    /** @var Entree $drink 飲料 */
    $drink = new Entree('一杯牛奶', '牛奶');
    if ($drink->hasIngredient('牛奶')) {
        print "好喝！";
    }
} catch (Exception $exception) {
    print "沒辦法建立飲料物件：" . $exception->getMessage();
}
