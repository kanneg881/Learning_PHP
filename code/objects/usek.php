<?php

use Tiny\Eating\Fruit as Snack;

use Tiny\Fruit;

// 這會呼叫 \Tiny\Eating\Fruit::munch();
Snack::munch("草莓");

// 這會呼叫 \Tiny\Fruit::munch();
Fruit::munch("柳橙");
