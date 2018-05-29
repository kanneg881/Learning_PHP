<?php
/** @var array $sweets 甜點 */
$sweets = array(
    '芝麻鬆餅',
    '方形椰奶凝膠',
    '黑糖蛋糕',
    '甜米飯和肉'
);

/**
 * 產生選項
 *
 * @param array $options 選項
 * @return string html 選項
 */
function generateOptions(array $options): string
{
    /** @var string $html 選項 */
    $html = '';

    foreach ($options as $option) {
        $html .= "<option>$option</option>\n";
    }

    return $html;
}

/**
 * 顯示表單
 */
function showForm(): void
{
    /** @var array $sweets 甜點 */
    $sweets = generateOptions($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
你的訂單：<select name="order">
$sweets
</select>
<br/>
<input type="submit" value="訂購">
</form>
_HTML_;
}
