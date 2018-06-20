<?php
/** @var string $name 名稱 */
$name = 'Umberto';

/**
 * 說你好
 */
function sayHello(): void
{
    print '你好，';
    print global $name;
}

sayHello();