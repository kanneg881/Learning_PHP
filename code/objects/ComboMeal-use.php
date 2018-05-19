<?php

/** @var Entree $soup 一種湯與它的食材 */
$soup = new Entree('雞湯', array('雞肉', '水'));

/** @var Entree $soup 一種三明治與它的食材 */
$sandwich = new Entree('雞肉三明治', array('雞肉', '麵包'));

/** @var ComboMeal $combo 一種組合湯與三明治的前菜 */
try {
    $combo = new ComboMeal('湯 + 三明治', array($soup, $sandwich));
} catch (Exception $exception) {
    echo $exception->getMessage();
}

foreach (['雞肉', '水', '泡菜'] as $ingredient) {
    if ($combo->hasIngredient($ingredient)) {
        print "組合中的某些食材包含{$ingredient}。\n";
    }
}