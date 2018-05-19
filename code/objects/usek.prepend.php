<?php

namespace Tiny\Eating;

class Fruit
{
    /**
     * 咀嚼
     *
     * @param string $bite 小量食物
     */
    public static function munch($bite)
    {
        print "這是一小部分的$bite";
    }
}

require __DIR__ . '/ns-1.php';
