<?php

/** @var Entree $soup 建了一個實例並指定給變數 $soup */
$soup = new Entree;
// 指定 $soup 的屬性值
$soup->name = '雞湯';
$soup->ingredients = array('雞肉', '水');

/** @var Entree $sandwich 建了另一個實例並指定給變數 $sandwich */
$sandwich = new Entree;
// 指定 $sandwich 的屬性值
$sandwich->name = '雞肉三明治';
$sandwich->ingredients = array('雞肉', '麵包');


foreach (['雞肉', '檸檬', '麵包', '水'] as $ingredient) {
    if ($soup->hasIngredient($ingredient)) {
        print "湯包含{$ingredient}。\n";
    }
    if ($sandwich->hasIngredient($ingredient)) {
        print "三明治包含{$ingredient}。\n";
    }
}
