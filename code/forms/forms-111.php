<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /** @var array $defaults 預設值 */
    $defaults = $_POST;
} else {
    $defaults = array(
        '發送' => '是',
        '尺寸' => '中',
        '主菜' => array('芋頭', '肚'),
        '甜點' => '蛋糕'
    );
}
