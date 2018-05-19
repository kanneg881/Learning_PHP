<?php

namespace Tiny;

class Fruit
{
    /**
     * 咀嚼
     *
     * @param string $bite 小量食物
     */
    public static function munch(string $bite): void
    {
        print "這是一小部分的$bite";
    }
}
